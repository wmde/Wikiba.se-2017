<?php

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class SmokeTest extends \PHPUnit_Framework_TestCase {

	private static $PAGE_PATH;


	public static function setUpBeforeClass() {
		self::$PAGE_PATH = __DIR__ . '/../output_test/';
		exec( 'sculpin generate --env=test' );
	}

	public function testMainPageContainsIntroText() {
		$this->assertPageContains(
			'Wikibase is a collection of applications and libraries for creating',
			'index.html'
		);
	}

	public function testComponentsPageContainsComponents() {
		$this->assertPageContains(
			'Components',
			'components/index.html'
		);
	}

	private function assertPageExists( $fileName ) {
		$this->assertFileExists( self::$PAGE_PATH . $fileName );
	}

	private function assertPageContains( $expected, $fileName ) {
		$this->assertPageExists( $fileName );

		$page = file_get_contents( self::$PAGE_PATH . $fileName );

		$this->assertContains(
			$expected,
			$page
		);
	}

}
