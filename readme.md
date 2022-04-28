# Crusher
## Functionality
Per [Crusher docs](https://help.fandom.com/wiki/Extension:Crusher) - extension automatically adds a scrollbar to tables that are wider than the page, example can be found on the linked document.

This is done by using [BeforePageDisplay](https://www.mediawiki.org/wiki/Manual:Hooks/BeforePageDisplay) hook which adds JS modules that are taking care of adding a scrollbar to a tables. Please note that tables in namespace `Media` or `Special` won't be affected.

To enable extension set `wgEnableTableCrushing` config variable to true (it's automatically set when loading the extension).
## Links
* https://help.fandom.com/wiki/Extension:Crusher
* https://github.com/HydraWiki/Crusher
