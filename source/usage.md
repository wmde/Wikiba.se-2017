---
layout: default
title: Usage &amp; Installation
nav_name: usage
---

# Usage &amp; Installation

### Installation using Composer
The easiest way to install Wikibase is to use Composer to install [all the dependencies]({{site.url}}/components).

First [get composer](https://getcomposer.org) by following it's installation guide:

	curl -sS https://getcomposer.org/installer | php

Next clone the Wikibase Repository in the extensions folder of your MediaWiki installation:

	cd extensions
	git clone https://git.wikimedia.org/git/mediawiki/extensions/Wikibase.git

Then run composer **inside** the folder of your Wikibase installation to get all dependencies:

	cd Wikibase
	php composer.phar install

If you plan to contribute to Wikibase and its components run the following command instead to also get the sources of the components:

	php composer.phar install --prefer-source

After that adjust your `LocalSettings.php` to enable Wikibase. In order to enable a [Wikibase Repository](https://www.mediawiki.org/wiki/Extension:Wikibase_Repository), insert the following:

	$wgEnableWikibaseRepo = true;
	$wgEnableWikibaseClient = false;
	require_once "$IP/extensions/Wikibase/repo/Wikibase.php";
	require_once "$IP/extensions/Wikibase/repo/ExampleSettings.php";

To enable a [Wikibase Client](https://www.mediawiki.org/wiki/Extension:Wikibase_Client), insert the following instead:

	$wgEnableWikibaseRepo = false;
	$wgEnableWikibaseClient = true;
	require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
	require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";

Please note that it is currently **not** possible to enable Repository and Client on the same MediaWiki instance simultaneously.

You then need to run the database update script:

	php maintenance/update.php --quick

And finally populate the sites table:

	php maintenance/runScript.php extensions/Wikibase/lib/maintenance/populateSitesTable.php

**Note**: If you're installing a client you'll need to populate the interwiki table too:

	php maintenance/runScript.php extensions/Wikibase/client/maintenance/populateInterwiki.php

And make sure your wiki id is in the sites table, or simply changing it to one of the entries that is there by default:

	$GLOBALS['wgWBClientSettings']['siteGlobalID'] = "enwiki";

That's it! Wikibase should now be installed in your MediaWiki.

### Installation without composer
If you cannot install Wikibase using composer for any reason, there are nightly builds on labs: [toollabs:bene/wikibase](http://tools.wmflabs.org/bene/wikibase/). Download the build in one of the available formats and unpack it into the `extensions/Wikibase` folder. However, using composer is encouraged because it simplifies updating a lot.
