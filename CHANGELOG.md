# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/).

## [Unreleased]
### Added
- Add php-intl as hard requirement - [#29539](https://github.com/owncloud/core/issues/29539)
- Optionally show server hostname in status.php - [#29471](https://github.com/owncloud/core/issues/29471)
- Add link for logfiles docs in exception page and simplify text - [#29674](https://github.com/owncloud/core/issues/29674)
- Link to trusted domains docs in error message - [#29730](https://github.com/owncloud/core/issues/29730)
- Add indices on share table - [#29883](https://github.com/owncloud/core/issues/29883) [#29592](https://github.com/owncloud/core/issues/29592)
- Add dispatcher event for "unshare from self" action - [#29851](https://github.com/owncloud/core/issues/29851)
- Technology preview for PHP 7.2 support - [#29878](https://github.com/owncloud/core/issues/29878)
- Added public hooks for file operations using Symfony Event Dispatcher - [#29939](https://github.com/owncloud/core/issues/29939)
- Expose getAppPath() and getAppWebPath() on the AppManager service [#30041](https://github.com/owncloud/core/pull/30041)
- Add warning in settings page when running in debug mode - [#29936](https://github.com/owncloud/core/issues/29936)

### Changed
- Switch Webdav URL in field in navigation panel to the new endpoint - [#29766](https://github.com/owncloud/core/issues/29766)
- Require a minimum of 1 character for the application password name - [#29831](https://github.com/owncloud/core/issues/29831)
- Only allow a single active theme app with no magic fallbacks to inactive app themes  - [#29854](https://github.com/owncloud/core/issues/29854)
- Config report now hides email address from email config - [#29949](https://github.com/owncloud/core/issues/29949)
- Change "remote" to "federated" suffix in sharing autocomplete dialog. - [#30046](https://github.com/owncloud/core/issues/30046)

### Removed
- Removed old Dropbox storage backend, people should use the [files_external_dropbox app](https://github.com/owncloud/files_external_dropbox/) instead - [#29135](https://github.com/owncloud/core/issues/29135)
- Revoke tasks.crt - [#29882](https://github.com/owncloud/core/issues/29882)
- Remove unused composer dependency on natxet/CssMin - [#29930](https://github.com/owncloud/core/issues/29930)

### Fixed
- Fix Dropbox / GDrive oauth handshake handling - [#30071](https://github.com/owncloud/core/pull/30071)
- Redisplay login page on CSRF error - [#30035](https://github.com/owncloud/core/issues/30035)
- Do not reset display name to uid on sso login - [#30038](https://github.com/owncloud/core/issues/30038)
- Do not automatically disable apps of certain types - [#29870](https://github.com/owncloud/core/issues/29870)
- Fix provisioning API when dealing with group name "0" - [#30004](https://github.com/owncloud/core/issues/30004)
- Tweak occ command help output - [#29959](https://github.com/owncloud/core/issues/29959)
- Now using upsert instead of insertIfNotExists for file cache updates, fixes concurrency issues - [#29934](https://github.com/owncloud/core/issues/29934)
- Only set CORS headers on Webdav endpoint when Origin header is specified - [#29874](https://github.com/owncloud/core/issues/29874)
- Ignore broken/dead symlinks on filescan - [#28959](https://github.com/owncloud/core/issues/28959)
- Improve performance by caching non-existing accounts - [#29866](https://github.com/owncloud/core/issues/29866)
- Fix template location order by searching the enabled theme app first - [#29867](https://github.com/owncloud/core/issues/29867)
- Actually log message instead of {$message} - [#29844](https://github.com/owncloud/core/issues/29844)
- Improved performance on new DAV endpoint by skipping querying parent nodes - [#29834](https://github.com/owncloud/core/issues/29834)
- Adjust error message about PHP compatibility to say PHP X.X like previous line. - [#29828](https://github.com/owncloud/core/issues/29828)
- Raise more useful message when constructor are not resolvable - [#29760](https://github.com/owncloud/core/issues/29760)
- Fix wording for versions expiration occ command - [#29671](https://github.com/owncloud/core/issues/29671)
- Handle invalid or missing external storage backend to keep mount point visible - [#29562](https://github.com/owncloud/core/issues/29562)
- Fix integrity check when owncloud is not installed - [#29692](https://github.com/owncloud/core/issues/29692)
- Fix issues about unsharing with some scenarios after moving the share - [#29716](https://github.com/owncloud/core/issues/29716)
- Allow group 0 to be created by provisioning API - [#29734](https://github.com/owncloud/core/issues/29734)
- Do not reset quota if it was not provided - [#29673](https://github.com/owncloud/core/issues/29673)
- Improve quota value validation - check size only if size key is set - [#29743](https://github.com/owncloud/core/issues/29743)
- Code cleanup - [#29799](https://github.com/owncloud/core/issues/29799)

## 10.0.4 - 2017-12-06
### Added
- Added support for eml mimetype - [#29204](https://github.com/owncloud/core/issues/29204)
- Added "occ dav:cleanup-chunks" command to clean up expired uploads - [#29180](https://github.com/owncloud/core/issues/29180)
- Added "occ files:scan" repair mode to repair mismatch filecache paths - [#29074](https://github.com/owncloud/core/issues/29074) [#29232](https://github.com/owncloud/core/issues/29232)
- Added occ command to change/recreate master-key - [#29260](https://github.com/owncloud/core/issues/29260) [#29735](https://github.com/owncloud/core/issues/29735)
- Detailed mode for "occ security:routes" - [#29095](https://github.com/owncloud/core/issues/29095)
- Webdav property to retrieve a private link to files or folders - [#29041](https://github.com/owncloud/core/issues/29041)
- CORS support for public API routes - [#28852](https://github.com/owncloud/core/issues/28852) [#29741](https://github.com/owncloud/core/issues/29741) [#29749](https://github.com/owncloud/core/issues/29749)
- More "files_sharing" capabilities entries - [#29040](https://github.com/owncloud/core/issues/29040)
- Display server name in admin page, don't show in status.php - [#28938](https://github.com/owncloud/core/issues/28938)
- Validate public link mail on the client side - [#29042](https://github.com/owncloud/core/issues/29042)
- Expose XHR response in share dialog autocomplete callback for extensions - [#29231](https://github.com/owncloud/core/issues/29231)
- Let apps provide icons for settings sections - [#29358](https://github.com/owncloud/core/issues/29358)
- Added cancellable prehooks for logout operation - [#29352](https://github.com/owncloud/core/issues/29352)
- Markdown support for app descriptions in apps settings panel - [#29333](https://github.com/owncloud/core/issues/29333)
- Add option to allow user to share only with the groups they belong to - [#29391](https://github.com/owncloud/core/issues/29391)
- Cacheable storage adapter for use by Flysystem based external storage backends - [#29414](https://github.com/owncloud/core/issues/29414)
- Add user additional info field for share autocomplete  - [#29457](https://github.com/owncloud/core/issues/29457)
- Add dispatcher event for remote fed shares - [#29482](https://github.com/owncloud/core/issues/29482)
- Adding mode of operations - either single-instance or clus… - [#29492](https://github.com/owncloud/core/issues/29492)
- Added support for MariaDB 10.2.7+ - [#29240](https://github.com/owncloud/core/issues/29240)
- Admins can now exclude files from integrity check in config.php - [#29460](https://github.com/owncloud/core/issues/29460)
- Use X-Request-ID header as request id if provided by client, useful for logging - [#29434](https://github.com/owncloud/core/issues/29434)
- Added authentication headers verification to validate the session - [#29525](https://github.com/owncloud/core/issues/29525)
- Added IServiceLoader on server container to load app service classes from XML tags in info.xml - [#29525](https://github.com/owncloud/core/issues/29525)
- Trigger events for federated shares - [#29566](https://github.com/owncloud/core/issues/29566)

### Changed
- Exclude mimetypelist.js from integrity check - [#29048](https://github.com/owncloud/core/issues/29048) [#29316](https://github.com/owncloud/core/issues/29316)
- Refactor set and reset of capabilities - [#29200](https://github.com/owncloud/core/issues/29200)
- All amazon locations support v4 now - v3 deprecated - [#29153](https://github.com/owncloud/core/issues/29153)
- Modified time value of files is now 64 bits long - [#28961](https://github.com/owncloud/core/issues/28961)
- User names must now be at least 3 characters long - [#29237](https://github.com/owncloud/core/issues/29237)
- AccountMapper get by email is now case insensitive - [#29341](https://github.com/owncloud/core/issues/29341)
- Remove deprecated federated share API warning as it needlessly pollutes logs - [#29364](https://github.com/owncloud/core/issues/29364)
- Improve UI for public link sharing permissions for folders - [#29413](https://github.com/owncloud/core/issues/29413)
- Replace notify user for local shares with button - [#29463](https://github.com/owncloud/core/issues/29463)
- Log out current user after submitting form in password reset page - [#29464](https://github.com/owncloud/core/issues/29464)
- Update minimum supported browser versions - [#29507](https://github.com/owncloud/core/issues/29507)
- Admins can now change display name even when its modification is disallowed for regular users - [#29442](https://github.com/owncloud/core/issues/29442)

### Removed
- Remove AvatarPermissions repair step - [#29202](https://github.com/owncloud/core/issues/29202)
- Remove unused FTP code - [#29186](https://github.com/owncloud/core/issues/29186)
- Remove app store related code obsoleted by market app - [#29249](https://github.com/owncloud/core/issues/29249)
- Remove a route to removed script - [#29553](https://github.com/owncloud/core/issues/29553)

### Fixed
- Corrected namespace for OC\Memcache\ArrayCache which caused errors on some environments - [#29219](https://github.com/owncloud/core/issues/29219)
- External storage Javascript code from apps is now loaded correctly (fixes Dropbox app and others) - [#29225](https://github.com/owncloud/core/issues/29225)
- Use product name from theme - [#29251](https://github.com/owncloud/core/issues/29251)
- Make sure the external storage folder name is editable when returning from OAuth authorization - [#29253](https://github.com/owncloud/core/issues/29253)
- Fix duplicate external storage config that appear sometimes when returning from OAuth authorization - [#29254](https://github.com/owncloud/core/issues/29254)
- Log exceptions in decrypt-all command - [#29248](https://github.com/owncloud/core/issues/29248)
- SFTP key pair mode now works again - [#29156](https://github.com/owncloud/core/issues/29156)
- Use correct class namespace for ownCloud ext storage - [#28935](https://github.com/owncloud/core/issues/28935)
- Fix generated zip file to avoid errors with some zip tools - [#29149](https://github.com/owncloud/core/issues/29149)
- Fix position of dialog boxes - [#29133](https://github.com/owncloud/core/issues/29133) [#29467](https://github.com/owncloud/core/issues/29467)
- Move 64bit mtime migration from dav to core - [#29121](https://github.com/owncloud/core/issues/29121)
- Allow 0 byte quota to be entered on UI - [#29113](https://github.com/owncloud/core/issues/29113)
- Don't display warning about limited commands when running maintenance:install - [#28968](https://github.com/owncloud/core/issues/28968)
- Handle no user session in isSharingDisabledForUser() - [#28915](https://github.com/owncloud/core/issues/28915)
- Fix icon format for federated cloud sharing - [#28972](https://github.com/owncloud/core/issues/28972)
- Fix for decrypting user specific keys - [#29189](https://github.com/owncloud/core/issues/29189)
- Remove alternate keys storage during user delete - [#29155](https://github.com/owncloud/core/issues/29155)
- Fix error logs due to deletion of keys - [#28934](https://github.com/owncloud/core/issues/28934)
- Fix encryption panel to properly detect current mode after upgrade to ownCloud 10 - [#29049](https://github.com/owncloud/core/issues/29049)
- Fix quota check when uploading to federated shares - [#29325](https://github.com/owncloud/core/issues/29325) [#29424](https://github.com/owncloud/core/issues/29424)
- Fix issue when mounting another encrypted ownCloud - [#29360](https://github.com/owncloud/core/issues/29360)
- AccountMapper get by email is now case insensitive - [#29341](https://github.com/owncloud/core/issues/29341)
- Fix order of apps to be deterministic during install process - [#29267](https://github.com/owncloud/core/issues/29267)
- Only initiate connection to federated share when necessary - [#29314](https://github.com/owncloud/core/issues/29314)
- Allow group named "0" to be deleted - [#29323](https://github.com/owncloud/core/issues/29323)
- Do not translate CORS header in settings page - [#29313](https://github.com/owncloud/core/issues/29313)
- Disable background scan for home storage/cache - [#29306](https://github.com/owncloud/core/issues/29306)
- Fixed double escaping in full page error messages - [#29304](https://github.com/owncloud/core/issues/29304)
- Updated davclient.js which fixes issue whenever an app extends Array prototype - [#29305](https://github.com/owncloud/core/issues/29305)
- Fix OCS apps API to correctly include attributes into generated XML - [#29303](https://github.com/owncloud/core/issues/29303)
- Make enum type mapping work with migrations - [#29268](https://github.com/owncloud/core/issues/29268)
- Handle invalid storage when getting storage root id - [#29278](https://github.com/owncloud/core/issues/29278)
- Fix storing/retrieval for dav properties of non files - [#29273](https://github.com/owncloud/core/issues/29273)
- Remove double quotes from boolean values in status.php output - [#29271](https://github.com/owncloud/core/issues/29271)
- Tidy code in DAV related classes - [#29272](https://github.com/owncloud/core/issues/29272)
- Fix the missing argument to DecryptAll - [#29371](https://github.com/owncloud/core/issues/29371)
- Skip copying skeleton files if skeleton dir is not accessible - [#29379](https://github.com/owncloud/core/issues/29379)
- Use chunked DB query when preloading directory content for DAV properties - [#29416](https://github.com/owncloud/core/issues/29416)
- Fix failure when checking integrity signature for non-existing files - [#29433](https://github.com/owncloud/core/issues/29433)
- Prevent uploading of part files through WebDav - [#29432](https://github.com/owncloud/core/issues/29432)
- Only trigger "changeUser" event if account object really changed - [#29429](https://github.com/owncloud/core/issues/29429)
- Only load app type once in app manager classes - [#29428](https://github.com/owncloud/core/issues/29428)
- Use efficient startsWith implementation in server container - [#29427](https://github.com/owncloud/core/issues/29427)
- Fix race condition in browser when uploading folder tree - [#29435](https://github.com/owncloud/core/issues/29435)
- Disable nginx buffering for file downloads to avoid huge memory usage in some scenarios - [#29403](https://github.com/owncloud/core/issues/29403)
- Fix many issues related to session removal - [#28879](https://github.com/owncloud/core/issues/28879)
- Fix SMB to better detect when overwriting through rename - [#29564](https://github.com/owncloud/core/issues/29564)
- Fix files scan repair in bulk warning - [#29631](https://github.com/owncloud/core/issues/29631)
- Fix federated share import from public link - [#29677](https://github.com/owncloud/core/issues/29677)
- Fix status.php to properly display product name - [#29728](https://github.com/owncloud/core/issues/29728)
- Sort allowed storages checkbox list - [#29746](https://github.com/owncloud/core/issues/29746)

## [10.0.3] - 2017-09-15
### Added
- It is now possible to upgrade from 8.2.11 directly to 10 - [#28655](https://github.com/owncloud/core/issues/28655) [#28673](https://github.com/owncloud/core/pull/28673)
- Added extra check in case of missing home storage - [#28504](https://github.com/owncloud/core/issues/28504)
- Added Shield and Workflow icons - [#28588](https://github.com/owncloud/core/issues/28588)
- Enable chunking for big files in web UI when logged in - [#28547](https://github.com/owncloud/core/issues/28547)
- Added emitting of hook "post_unshareFromSelf" to Share 2.0 - [#28413](https://github.com/owncloud/core/issues/28413)
- Added occ user:inactive command to list inactive users - [#28294](https://github.com/owncloud/core/issues/28294)
- Added internal setting for the periodic credentials validity check - [#28298](https://github.com/owncloud/core/issues/28298)
- Added jquery events for external storage settings UI when using OAuth - [#28210](https://github.com/owncloud/core/issues/28210)
- Added public IThemeService which allows apps like the template editor to interact with the current theme - [#28647](https://github.com/owncloud/core/issues/28647) [#28926](https://github.com/owncloud/core/issues/28926)
- Added "passwordEnabled" field to hook data of link shares - [#28827](https://github.com/owncloud/core/issues/28827)
- Add new option to disable sharing in every user-mounted external storages - [#28706](https://github.com/owncloud/core/issues/28706)
- Added default user and group share permissions - [#28903](https://github.com/owncloud/core/issues/28903)
- Added occ command to list routes - [#28907](https://github.com/owncloud/core/issues/28907)
- Added mime types for m3u, m3u8, pls mappings to audio streams - [#28885](https://github.com/owncloud/core/issues/28885)

### Changed
- Transfer ownership now works with master key encryption - [#28537](https://github.com/owncloud/core/issues/28537) [#28845](https://github.com/owncloud/core/issues/28845)
- Reenable medial search by default - [#28064](https://github.com/owncloud/core/issues/28064)
- The LoginController now emits "failedLogin" hook signal after a failed login - [#28631](https://github.com/owncloud/core/issues/28631)
- All columns that use the fileid have been changed to bigint (64-bits) - [#28581](https://github.com/owncloud/core/issues/28581)
- Added search pattern for the occ app:list command - [#28653](https://github.com/owncloud/core/issues/28653)
- Allow phpredis develop branch - [#28717](https://github.com/owncloud/core/issues/28717)
- Default minimum desktop version in config.php is now 2.2.4 - [#28540](https://github.com/owncloud/core/issues/28540)
- Reallow negative mtimes by default in storage implementations - [#28697](https://github.com/owncloud/core/issues/28697)

### Deprecated
### Removed
- Removed "themes" folder - [#28617](https://github.com/owncloud/core/issues/28617) [#28999](https://github.com/owncloud/core/issues/28999)
- Removed unused Windows checks - [#28612](https://github.com/owncloud/core/issues/28612)
- Removed "appstoreenabled" from config.php - [#28714](https://github.com/owncloud/core/issues/28714)
- Slash in filename when renaming is not allowed any more in the frontend (unintended "feature") - [#28490](https://github.com/owncloud/core/issues/28490)
- Using old chunking protocol on new DAV endpoint is now disallowed - [#28637](https://github.com/owncloud/core/issues/28637)

### Fixed
#### Platform
- Fix issue with folder sizes on 32-bit systems - [#28654](https://github.com/owncloud/core/issues/28654)
- Fix null error in ActivityManager on some setups - [#28420](https://github.com/owncloud/core/issues/28420)
- Load app code before running app specific migrations - [#28391](https://github.com/owncloud/core/issues/28391)
- Prevent certificate manager to access FS too early, fixes 8.2 to 10 migration issue - [#28668](https://github.com/owncloud/core/pull/28668)
- Clustering: Better support of read only config file and apps folder - [#28594](https://github.com/owncloud/core/issues/28594) [#28601](https://github.com/owncloud/core/issues/28601)
- Only use IndexIgnore in htaccess if mod_autoindex.c is enabled/loaded - [#28591](https://github.com/owncloud/core/issues/28591)
- Fix app enable of not existing app - [#28317](https://github.com/owncloud/core/issues/28317)
- Keep redirect information when logging in with wrong password - [#28511](https://github.com/owncloud/core/issues/28511)
- Use SwiftMailer antiflood plugin to reconnect after multiple emails sent - [#28180](https://github.com/owncloud/core/issues/28180)
- Theme is now properly loaded when displaying full page error messages - [#28622](https://github.com/owncloud/core/pull/28622)
- Adjusted warning for PHP 5.5 EOL - [#28765](https://github.com/owncloud/core/issues/28765)
- Don't enable market app on upgrade from OC < 10 if "appstoreenabled" was false in config.php - [#28757](https://github.com/owncloud/core/issues/28757)
- Use different CSS comment style for IE11 support - [#28752](https://github.com/owncloud/core/issues/28752)
- Adjust default slogan - [#28724](https://github.com/owncloud/core/issues/28724)
- Catch filecache inconsistencies instead of logging warnings - [#28710](https://github.com/owncloud/core/issues/28710)
- Check for null when traversing app passwords table rows - [#28894](https://github.com/owncloud/core/issues/28894)
- Improve market upgrade messages + new switch - [#28871](https://github.com/owncloud/core/issues/28871)
- Make occ upgrade verbose by default - [#28876](https://github.com/owncloud/core/issues/28876)
- Add more information to updatechecker config doc - [#28867](https://github.com/owncloud/core/issues/28867)

#### Database
- All columns that use the fileid have been changed to bigint (64-bits) - [#28581](https://github.com/owncloud/core/issues/28581)
- Fix length of account search term column which broke installs on some DB setups - [#28576](https://github.com/owncloud/core/issues/28576)
- Fix column lengths on migrations table to fix index - [#28254](https://github.com/owncloud/core/issues/28254)
- Fixed some repeated duplicate key errors relate to oc_preferences table - [#28486](https://github.com/owncloud/core/issues/28486)
- Add migration step to fix birthday calendars - [#28338](https://github.com/owncloud/core/issues/28338)
- Added cache for new card uri-id mapping to fix db cluster execution - [#28308](https://github.com/owncloud/core/issues/28308)

#### Performance
- Optimize upload - don't fetch info of non-existing file - [#28704](https://github.com/owncloud/core/issues/28704)
- Optimize upload - don't check if file exists if already known - [#28704](https://github.com/owncloud/core/issues/28704)
- Optimize upload - do not fetch metadata for part file during checksuming - [#28633](https://github.com/owncloud/core/issues/28633)
- Optimize shares retrieval logic with complex scenarios - [#28524](https://github.com/owncloud/core/issues/28524)
- Optimize query logger - [#28220](https://github.com/owncloud/core/issues/28220)
- Remove initial scanning overhead to speed up federated shares with lots of entries - [#28604](https://github.com/owncloud/core/issues/28604)
- Improve contact search performance - [#28042](https://github.com/owncloud/core/issues/28042)
- Improved search performance for federated instance users - [#28209](https://github.com/owncloud/core/issues/28209)
- Add database index on "oc_share.share_with" column - [#28856](https://github.com/owncloud/core/issues/28856)

#### Filesystem / storage
- Don't trigger hooks for every new dav chunk, only for final file - [#28817](https://github.com/owncloud/core/issues/28817)
- Prevent creating file cache inconsistencies when moving a subtree in or out of a share - [#28219](https://github.com/owncloud/core/issues/28219)
- Add check for empty result in storage memcache - [#28548](https://github.com/owncloud/core/issues/28548)
- Fix error message when accessing of non-existing file on external storage - [#28613](https://github.com/owncloud/core/issues/28613)
- Fixed OAuth frontend logic when connecting to external storage - [#28496](https://github.com/owncloud/core/issues/28496) [#28400](https://github.com/owncloud/core/issues/28400)
- Fix quota handling on new Webdav endpoint (affects desktop client 2.2+) - [#28261](https://github.com/owncloud/core/issues/28261)
- Fix mounting Webdav as drive in Windows 10 - [#28243](https://github.com/owncloud/core/issues/28243)
- Fix rare error that happens when mounting invalid shares - [#28342](https://github.com/owncloud/core/issues/28342)
- Handle BSD case for 32 bit filemtime and install warning - [#28790](https://github.com/owncloud/core/issues/28790)
- Properly check target rename path in new dav endpoint - [#28737](https://github.com/owncloud/core/issues/28737)
- Increment required only when encryption is enabled - [#28880](https://github.com/owncloud/core/issues/28880)

#### Files app
- Make sure passed upload mtime is always an int - [#28186](https://github.com/owncloud/core/issues/28186)
- Fix directory mime type in trashbin list - [#28803](https://github.com/owncloud/core/issues/28803)
- Properly highlight files when opening private link - [#28681](https://github.com/owncloud/core/issues/28681)
- Fix overlapping selectively in default fileslist - [#28906](https://github.com/owncloud/core/issues/28906)
- Better timeout detection in web UI uploads + chunked uploads - [#28896](https://github.com/owncloud/core/issues/28896)
- Fix getting drop target when dragging from file manager  - [#28882](https://github.com/owncloud/core/issues/28882)
- Improve file upload progress bar - [#28861](https://github.com/owncloud/core/issues/28861)

#### Sharing
- Creating link shares now doesn't forget "Allow editing" permission any more - [#28065](https://github.com/owncloud/core/issues/28065)
- Fix "notify user" checkbox in share panel - [#28237](https://github.com/owncloud/core/issues/28237)
- Proper message shown when accessing unreachable private links - [#28600](https://github.com/owncloud/core/issues/28600)
- Fix exact search term match for LDAP in share autocomplete - [#28851](https://github.com/owncloud/core/issues/28851)
- Add tooltip to public shares panel - [#28781](https://github.com/owncloud/core/issues/28781)
- Validate share link password even if unchanged when updating share - [#28713](https://github.com/owncloud/core/issues/28713)
- Fix DiscoveryManager error during upgrade by untangling federated share app dependencies - [#28858](https://github.com/owncloud/core/pull/28858)

#### User management
- Don't set email if invalid in user:add command - [#28577](https://github.com/owncloud/core/issues/28577)
- Group admins can now properly edit members' email addresses - [#28366](https://github.com/owncloud/core/issues/28366)
- Fixed "settings_ajax_changegroupname" typo in route name - [#28746](https://github.com/owncloud/core/issues/28746)
- Use IProvidesEMailBackend to fix syncing with LDAP backend - [#28736](https://github.com/owncloud/core/issues/28736)

#### API related
- Make Backbone PROPPATCH work with options.wait mode - [#28791](https://github.com/owncloud/core/issues/28791) [#28837](https://github.com/owncloud/core/issues/28837)
- Detect PROPPATCH failure by parsing multistatus in Backbone Webdav adapter - [#28628](https://github.com/owncloud/core/issues/28628)
- Error messages from the server on upload are now displayed in the web UI instead of generic messages - [#28635](https://github.com/owncloud/core/issues/28635)
- Properly set the status text in OCS API v2 calls - [#28595](https://github.com/owncloud/core/issues/28595)
- Data was not properly set in case of OCS Result object - [#28198](https://github.com/owncloud/core/issues/28198)

#### Other
- Only reload file list when switching navigation sections - [#28843](https://github.com/owncloud/core/issues/28843)
- Make new text file tooltip messages update properly - [#28151](https://github.com/owncloud/core/issues/28151)
- Fix trashbin preview icons - [#28158](https://github.com/owncloud/core/issues/28158)
- Allow user "0" as in comments - [#28422](https://github.com/owncloud/core/issues/28422)
- Better description for occ files:scan command - [#28839](https://github.com/owncloud/core/issues/28839)
- Better description for occ files:cleanup command - [#28841](https://github.com/owncloud/core/issues/28841)
- Reworded upgrade message for admin with big instance - [#28828](https://github.com/owncloud/core/issues/28828)
- Make lost password errors distinguishable - [#28756](https://github.com/owncloud/core/issues/28756)
- Add height to menutoggler - [#28723](https://github.com/owncloud/core/issues/28723)
- Remove apostrophe from full page file read error text - [#28702](https://github.com/owncloud/core/issues/28702)
- Added missing "fatal" log level to occ log:manage level command - [#28683](https://github.com/owncloud/core/issues/28683)

## [10.0.2] - 2017-06-30

- [major] Fix issue with database.xml migration being triggered twice on market app install - [#27982](https://github.com/owncloud/core/issues/27982)
- [major] Apps formerly marked as shipped can now be uninstalled - [#27985](https://github.com/owncloud/core/issues/27985)
- [major] Market now properly updates app version when using multiple apps paths - [#28002](https://github.com/owncloud/core/issues/28002)

## [10.0.1] - 2017-06-23

- [major] Clear cached app info before installing app - [#27953](https://github.com/owncloud/core/issues/27953)
- [major] Fix to allow admin login when using home object store mode - [#27963](https://github.com/owncloud/core/issues/27963)
- [major] Skeleton files correct copied for shibboleth - [#27935](https://github.com/owncloud/core/issues/27935)
- [major] Automatically enable market app when upgrading from OC < 10 - [#27930](https://github.com/owncloud/core/issues/27930)
- [major] Fix issue where market would run app migrations twice in some scenarios - market/#76
- [major] Fetch search terms from user backend (ex: LDAP) for more extended user search ability - [#27906](https://github.com/owncloud/core/issues/27906)
- [major] Added support for upload-only link shares - [#27548](https://github.com/owncloud/core/issues/27548)
- [major] When enabling default encryption module the admin must now explicitly choose encryption type (master key vs user key) - [#27512](https://github.com/owncloud/core/issues/27512)
- [major] Fix missing "publicuri" field when upgrading from 9.1.5 - [#27754](https://github.com/owncloud/core/issues/27754)
- [major] Add options to the user:sync command to handle missing accounts - [#27798](https://github.com/owncloud/core/issues/27798)
- [major] Maintenance mode now properly blocks syncing on new DAV endpoint - [#27821](https://github.com/owncloud/core/issues/27821)
- [major] Copy button for multiple link share now copies the correct link - [#27863](https://github.com/owncloud/core/issues/27863)
- [major] Fix upload issues with IE11 - [#27875](https://github.com/owncloud/core/issues/27875)
- [major] Allow apps to register multiple settings panels - [#27885](https://github.com/owncloud/core/issues/27885)
- [major] Account table doesn't sync from user backends that have no listing support - [#27862](https://github.com/owncloud/core/issues/27862)
- [major] Add events for password validation - [#27883](https://github.com/owncloud/core/issues/27883)
- [major] Add JS event after external storage mount config is loaded, for UI extensions - [#27740](https://github.com/owncloud/core/issues/27740)
- [major] Fix theming of setup page by autoloading default_enable theme apps - [#27819](https://github.com/owncloud/core/issues/27819)
- [major] Allow apps to register custom settings page sections in info.xml - [#27634](https://github.com/owncloud/core/issues/27634)
- [major] Add admin sharing option to restrict autocomplete to membership groups but still allow typing full name if known - [#27869](https://github.com/owncloud/core/issues/27869)
- [minor] Market app update now doesn't overwrite local git checkouts - [#27973](https://github.com/owncloud/core/issues/27973)
- [minor] Delete "appstoreenabled" config value when enabling market - [#27956](https://github.com/owncloud/core/issues/27956)
- [minor] Do not verify email address when entered by an admin on their personal page - [#27921](https://github.com/owncloud/core/issues/27921)
- [minor] Fix default share permission issue in public API [#27927](https://github.com/owncloud/core/issues/27927)
- [minor] Properly rethrow exception when error occurred when enabling an app - [#27970](https://github.com/owncloud/core/issues/27970)
- [minor] Remove own shares from "Shared with you" section - [#27972](https://github.com/owncloud/core/issues/27972)
- [minor] Fix updating to daily from 10.0.0 with web updater - updater/#422
- [minor] Fix updating to 10.0.1 with web updater - [#27965](https://github.com/owncloud/core/issues/27965)
- [minor] Removed unused and non-working auto-login after setup - [#27971](https://github.com/owncloud/core/issues/27971)
- [minor] Fix SMB storage to return false if stat failed - [#27859](https://github.com/owncloud/core/issues/27859)
- [minor] Update swiftmailer - [#27897](https://github.com/owncloud/core/issues/27897)
- [minor] Escape filter in search - [#27900](https://github.com/owncloud/core/issues/27900)
- [minor] Fix file name output in error pages - [#27808](https://github.com/owncloud/core/issues/27808)
- [minor] Support for alternative login buttons through config.php - [#27607](https://github.com/owncloud/core/issues/27607)
- [minor] Example theme app renamed to "theme-example" by convention - [#27632](https://github.com/owncloud/core/issues/27632)
- [minor] Fix missing translation of built-in section names - [#27645](https://github.com/owncloud/core/issues/27645)
- [minor] Add ability to disable password reset form in config - [#27676](https://github.com/owncloud/core/issues/27676)
- [minor] Add support for themed radio buttons - [#27681](https://github.com/owncloud/core/issues/27681)
- [minor] Fix customjs extension handling for external storage apps - [#27683](https://github.com/owncloud/core/issues/27683)
- [minor] Fix upgrade error with mod_fcgid and PHP 7 - [#27553](https://github.com/owncloud/core/issues/27553)
- [minor] Remove sharing subtab when link sharing is disallowed - [#27708](https://github.com/owncloud/core/issues/27708)
- [minor] Add privacy warning in link shares panel - [#27844](https://github.com/owncloud/core/issues/27844)
- [minor] Fix files app name in navigation menu - [#27843](https://github.com/owncloud/core/issues/27843)
- [minor] Fix mimetype table code to ignore folder extensions - [#27668](https://github.com/owncloud/core/issues/27668)
- [minor] Automatically focus the password field in password reset page - [#27889](https://github.com/owncloud/core/issues/27889)
- [minor] Trashbin restore warnings due to missing entries now logged as debug - [#27826](https://github.com/owncloud/core/issues/27826)
- [minor] Remove obsolete repair step RemoveOldShares - [#27737](https://github.com/owncloud/core/issues/27737)
- [minor] "local link" was renamed to "private link" - [#27594](https://github.com/owncloud/core/issues/27594)
- [minor] Fix column sorting in public file list page - [#27308](https://github.com/owncloud/core/issues/27308)

## 10.0.0 - 2017-04-26

### Added
#### General

- Allows users to add the app to the Android homescreen: [#25438](https://github.com/owncloud/core/pull/25438)
- Compatible with PHP 7.1: [#25436](https://github.com/owncloud/core/pull/25346)
- MySQL 4-byte UTF8 support: (utf8mb4 for e.g. Emoticons) [#17978](https://github.com/owncloud/core/pull/17978)
- Admin, personal pages and app management are now merged together into a single "Settings" entry: [#26449](https://github.com/owncloud/core/pull/26449)
- Admin page displays the output of the server's status.php: [#27238](https://github.com/owncloud/core/pull/27238)
- Also allow using email address for password recovery: [#27168](https://github.com/owncloud/core/pull/27168)
- Ability to disable password reset: [#27440](https://github.com/owncloud/core/issues/27440)
- Support Redis Cluster: [#26407](https://github.com/owncloud/core/pull/26407)
- ownCloud log entry reorder: [#27562](https://github.com/owncloud/core/pull/27562)
- ownCloud log file rules to split into separate files: [#27443](https://github.com/owncloud/core/pull/27443)
- occ scanner optimized memory usage for large scans by using autocommits: [owncloud/core/27527](https://github.com/owncloud/core/pull/27527)
- Third party apps are not disabled anymore when upgrading

#### Filesystem

- Ability to exclude folders from being processed, like snapshot folders: [#19235](https://github.com/owncloud/core/pull/19235)
- Checksum is computed on the fly and verified (File integrity checking): [#26655](https://github.com/owncloud/core/issues/26655) / [Technical Documentation](https://github.com/owncloud/documentation/issues/2964)

#### Files App

- Share Link can be copied to the clipboard [#25418](https://github.com/owncloud/core/pull/25418)
- Display version sizes in versions panel [#26511](https://github.com/owncloud/core/pull/26511)
- Transfer ownership now works for individual folders [#27343](https://github.com/owncloud/core/pull/27343)
- Favorite star indicator now visible in the file lists related to sharing (ex: "Shared with you") [#19753](https://github.com/owncloud/core/issues/19753)

#### User management

- Ability to disable users in the users page (enable column first under cog icon) [#27333](https://github.com/owncloud/core/pull/27333)
- When changing personal email, an email confirmation is now sent [#7326](https://github.com/owncloud/core/issues/7326)
- When password is changed through any means, the user will now receive an email [#27498](https://github.com/owncloud/core/pull/27498)
- Change user preferences through OCC [#24770](https://github.com/owncloud/core/issues/24770)

#### External storage

- "Local" storage type can now be disabled by sysadmin in config.php [#26653](https://github.com/owncloud/core/issues/26653)
- External storage backends must use [core external storage API](https://doc.owncloud.org/server/10.0/developer_manual/app/extstorage.html) to work without "files_external" [#18160](https://github.com/owncloud/core/issues/18160)
- FTP external storage moved to a separate app [files_external_ftp](https://github.com/owncloud/files_external_ftp)

#### Dav App

- CalDAV calendar public sharing [#25351](https://github.com/owncloud/core/pull/25351)

#### Sharing

- Support for multiple link shares: [#27337](https://github.com/owncloud/core/pull/27337)
- When a recipient moves a file or folder out of a received share, the owner now receives a backup in their trashbin: [#27042](https://github.com/owncloud/core/pull/27042)
- User avatars now visible in sharing autocomplete dropdown: [#25976](https://github.com/owncloud/core/pull/25976)

#### For developers

- Users from all user backends are now stored in a central account table, improves performance by reducing recurring backend traffic: [#23558](https://github.com/owncloud/core/issues/23558)
- Added event whenever a user is enabled or disabled: [#23970](https://github.com/owncloud/core/issues/23970)
- Added first login event: [#26206](https://github.com/owncloud/core/pull/26206)
- Added postLogout hook: [#27048](https://github.com/owncloud/core/pull/27048)
- New column in oc_jobs table to store last duration: [#27144](https://github.com/owncloud/core/pull/27144)
- Ability to specify offset and limit when doing a REPORT query on a files endpoint: [#26507](https://github.com/owncloud/core/pull/26507)
- Avatar API via WebDAV https://github.com/owncloud/core/pull/26872
- Improve return value support for two factor auth providers API - [#26593](https://github.com/owncloud/core/issues/26593)
- Apps can now register Sabre plugins in info.xml: [#26195](https://github.com/owncloud/core/issues/26195)
- REPORT method for files endpoint now allows searching for favorites: [#26099](https://github.com/owncloud/core/pull/26099)
- Group backends can now return group display names (partial support, only used by sharing autocomplete): [#26750](https://github.com/owncloud/core/pull/26750)

### Changed

- status.php now returns whether an instance requires a DB update: [#26209](https://github.com/owncloud/core/pull/26209)
- config option to hide server version in status.php [#27473](https://github.com/owncloud/core/pull/27473)
- provisioning API now also returns the user's home path: [#26850](https://github.com/owncloud/core/issues/26850)
- web updater shows link to changelog in admin page: [#26796](https://github.com/owncloud/core/issues/26796)

[Unreleased]: https://github.com/owncloud/core/compare/v10.0.4...stable10
[10.0.4]: https://github.com/owncloud/core/compare/v10.0.3...v10.0.4
[10.0.3]: https://github.com/owncloud/core/compare/v10.0.2...v10.0.3
[10.0.2]: https://github.com/owncloud/core/compare/v10.0.1...v10.0.2
[10.0.1]: https://github.com/owncloud/core/compare/v10.0.0...v10.0.1
