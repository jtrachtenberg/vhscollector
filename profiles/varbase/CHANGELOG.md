## 8.4.07

### Highlighted important changes since the last release:
* Issue #2902956: Updated Varbase Installer to have a branded install.
* Issue #2902878: Added [Entityqueue Form Widget] module 8.1.0-beta1
                  and enable it.
* Issue #2902938: Added translations for Varbase.
* Issue #2902821: Updated UI/UX for [Varbase Bootstrap Paragraphs] on styles,
                  and Edit preview, with style of text and image type.
* Issue #2902971: Added RTL support for [Varbase Total Control Dashboard]
* Issue #2902798: Updated [Drupal core] from 8.3.6 to 8.3.7

### Added since the last release:
* Issue #2902878: Added [Entityqueue Form Widget] module 8.1.0-beta1
                  and enable it.
* Issue #2902082: Added [Custom Permissions] module 8.x-1.0 and the patch to
                  fix a conflict with config_translate.
* Issue #2902938: Added translations for Varbase.

### Updates since the last release:
* Issue #2902365: Updated [devel] module from 8.1.0-rc2 to 8.1.0
* Issue #2902485: Enhanced the behaviour of [Real Time SEO] module UI in
                  Varbase SEO for LTR and RTL.
* Issue #2902506: Updated [Ace Code Editor] module from 8.1.x-dev to 8.1.0
* Issue #2902550: Updated [bootstrap layouts] module
                  from 8.5.x-dev to 8.5.0-alpha1
* Issue #2902798: Updated [Drupal core] from 8.3.6 to 8.3.7
* Issue #2902816: Updated [Views Reference Field] from 8.1.0-rc3 to 8.1.0
* Issue #2902832: Updated [paragraphs] module to the latest dev version.
* Issue #2902832: Reverted Updated [paragraphs] module to the latest
                  dev version
* Issue #2902832: Updated [ Feature: Landing Pages - Add any paragraph types
                  to the page. ] and [ Feature: Content Structure Features -
                  Landing Pages - Varbase text and image paragraphs. ]
* Issue #2903356: Updated [Ultimate Cron] module
                  from 8.2.0-alpha1 to 8.2.0-alpha2
* Issue #2903357: Updated [Views Infinite Scroll] module
                  from 8.1.3 to 8.1.5

### Fixes since the last release:
* Issue #2901372: Fixed a Warning on installing Varbase 8.x-406
* Issue #2903355: Fixed patches for [google_analytics_reports] module
                  on 3.x-dev#2b6bb8e
* Issue #2903358: Removed not used config from [Varbase Editor] for the
                  Full HTML text format (restricted_html) not to have any
                  notification in the syslog
* Issue #2903437: Fixed the style of action links primary button in
                  the [Vartheme Admin] theme.
* Issue #2902802: Varbase 8.4.07: Updated [CHANGELOG.md, UPDATE.md] files
                  and filtered the code for Drupal 8 Coding Standard.


## 8.4.06

### Highlighted important changes since the last release:

* Issue #2899468: Added [Varbase Total Control] feature module.
* Issue #2898561: Changed Installation Steps: Extra components, Development
                  tools, Add Descriptions for modules/features in the [Extra
                  Component] step, with forms for custom configurations
* Issue #2894493: Changed [Varbase Project] with a cleanup for Composer for
                  easier updates
* Issue #2896862: Enhanced the UI/UX preview for paragraphs in the Varbase
                  Landing page with [Add] button and easy reorder and editing
                  of paragraphs
* Issue #2893965: Changed [Varbase Media] Media (image) widget field preview,
                  Fixed the name of the image.style.field_preview config file.
* Issue #2900313: Added ability to embed tweets and other rich content in
                  WYSIWYG with Varbase Editor [Rich editor] Text format
* Issue #2899042: Added the option to Allow distribution to be installed in
                  other than profiles/varbase
* Issue #2895646: Added Colours in [Varbase Bootstrap Paragraphs] for the vbp
                  background with Colour set vpb_color

### Added since the last release:

* Issue #2893609: Added required Menu Position patch - Until patch is
                  committed to next dev release.
* Issue #2894140: Added the 26 [ Feature: Content Structure Features -
                  Landing Pages - Varbase text and image paragraphs]
                  Automated Functional Test
* Issue #2894168: Added the permission (Bypass Honeypot protection) to
                  the Authenticated role
* Issue #2895135: Added the patch for [ace editor] to use the ace build
                  library from libraries
* Issue #2895150: Added more image assets for tests
* Issue #2895135: Added the patch for [ace editor] to use the ace build
                  library from libraries
* Issue #2895796: Added [Views Bulk Edit] module and enable
* Issue #2895798: Added [Revision Log Default] module and enable
* Issue #2897452: Added a patch for Extlink for the issue of extra space when
                  no icon displayed
* Issue #2898447: Added the patch for page manager redirect location
                  2624972-14.patch
* Issue #2898452: Added [Config Ignore] module, and init config for which
                  general config to ignore
* Issue #2898452: Enabled Config Ignore module on updates, and init config
                  settings for which general config to ignore
* Issue #2898452: Added and Enabled Config Filter module.
* Issue #2898896: Enabled [Webform Bootstrap] module in [Varbase Webform]
                  feature module
* Issue #2898898: Added share-image.png in theme for SEO sharing
* Issue #2900591: Added the patch to update the requirements on installation
                  for [ACE Editor] to make it work if the library was in the
                  installation profile
* Issue #2900235: Added a new user role (SEO Admin) with SEO related
                  permissions in the [Varbase SEO] feature module

### Updates since the last release:

* Issue #2899415: Updated [Drupal core] from 8.3.5 to 8.3.6
* Issue #2893579: Removed Default Home page link
* Issue #2894493: Updated Varbase Scripts to work with varbase project
* Issue #2893965: Changed [Varbase Media] Media (image) widget field preview,
                          Fixed the name of the image.style.field_preview
                          config file.
* Issue #2900851: Updated [varbase heroslider media] feature module
                          from 8.4.0-beta9 to 8.4.0-beta10
* Issue #2894168: Changed [Password Policy] To decrease the password
                           policy complexity
* Issue #2894217: Updated [yoast_seo] Real-time SEO module
                          from 8.1.2 to 8.1.3
* Issue #2894481: Updated [honeypot] module from 8.1.26 to 8.1.27
* Issue #2895146: Updated [Views Reference Field]
                          from 8.1.0-beta1 to 8.1.0-beta2
* Issue #2895793: Updated [Views Reference Field]
                          from 8.1.0-beta2 to 8.1.0-rc2
* Issue #2896078: Updated [Search API] module from 8.1.2 to 8.1.3
* Issue #2896082: Updated [Panels] module from 8.4.1 to 8.4.2
* Issue #2895646: Updated [Paragraphs] to
                          1.x-dev#925018a66c681ffbc468f46503db608db40bd6eb
* Issue #2896742: Updated [Content locking (anti-concurrent editing)] module
                          from 8.1.0-alpha2 to 8.1.0-alpha3
* Issue #2896743: Updated [Views Reference Field] from 8.1.0-rc2 to 8.1.0-rc3
* Issue #2894493: Removed not important custom composer command scripts.
* Issue #2894493: Changed the notes for Advanced customized automated testing.
* Issue #2896862: Updated [ Feature: 25-landing page-add Paragraph types and
                          Feature: 26-content structure feature - landing page]
* Issue #2894493: Updated the script for Createing new Vartheme sub theme for
                          a project.
* Issue #2896862: Updated [Feature: Landing Pages - Add any paragraph types
                          to the page.] auto tests.
* Issue #2896995: Updated [Link Attributes widget] module from 8.1.0 to 8.1.1
* Issue #2897237: Updated [Adminimal Admin Toolbar] module from 8.1.4 to 8.1.5
* Issue #2894493: Updated Varbase Gherkin features README.md file.
* Issue #2898309: Updated [DRD Agent] module from 8.3.1 to 8.3.3
* Issue #2898310: Updated [Better Exposed Filters] module
                          from 8.3.0-alpha2 to 8.3.0-alpha3
* Issue #2898315: Updated [varbase hero slider media] feature module
                          from 8.4.0-beta5 to 8.4.0-beta6
* Issue #2898900: Updated [Redirect] from 8.1.0-alpha5 to 8.1.0-beta1
* Issue #2898902: Updated [Metatag] module from 8.1.1 to 8.1.2
* Issue #2898939: Updated [Varbase Heroslider media] module
                          from 8.4.0-beta6 to 8.4.0-beta7
* Issue #2899415: Changed .travis.yml file to have dist: precise
* Issue #2900221: Updated [varbase hero slider media] module
                          from 8.4.0-beta7 to 8.4.0-beta8
* Issue #2900561: Updated [webform] module from 8.5.0-beta15 to 8.5.0-beta16
* Issue #2900605: Removed Extlink extra space patch from make file and composer
* Issue #2900704: Removed .git folder from modules, themes, profiles
                          of development branches
* Issue #2900736: Updated [varbase heroslider media] feature module
                          from 8.4.0-beta8 to 8.4.0-beta9
* Issue #2900743: Updated [entity browser] module from 8.1.0 to 8.1.1
* Issue #2900831: Updated [varbase editor] module from 8.4.15 to 8.4.16
* Issue #2900833: Updated [varbase bootstrap paragraphs] feature module
                          from 8.4.0-alpha1 8.4.0-alpha2

### Fixes since the last release:

* Issue #2894612: Fixed Form required filed wrong path to load required.svg
                        image on label
* Issue #2894493: Fixed issues on running custom composer command and scripts.
* Issue #2897939: Fixed the issue of Default content with translatable content
                        type returns SQL error on content creation
* Issue #2897185: Fixed the issue of Images are not responsive in WYSIWYG
* Issue #2898444: Fixed the order of extra components by the default order in
                        the Configbit YAML instead of alphabetical
* Issue #2885192: Fixed Responsive Preview shows 'Page not found' when
                        multilingual site is enabled with Path-prefix setting
* Issue #2900924: Fixed mixed names of libraries styles and styling in Vartheme,
                        and VARTHEME_SUBTHEME template
* Issue #2886082: Fixed Image entity browser works perfect but the problem is
                         you focus on title text field then hitting enter, it
                         forces the image entity browser to open
* Issue #2886082: Reverted Fixed: Image entity browser works perfect but the
                         problem is you focus on title text field then hitting
                         enter, it forces the image entity browser to open
* Issue #2900691: Varbase 8.4.06: Updated [CHANGELOG.md, UPDATE.md] files and
                  filtered the code for Drupal 8 Coding Standard.

## 8.4.05

### Highlighted important changes since the last release:

* Issue #2886156: Updated [Varbase Landing] feature to use [Paragraphs] instead
                  of [Panelizer].
* Issue #2888454: Added the [ Feature: Landing Pages - Landing page add
                  paragraph types] for Automated Functional Testing.
* Issue #2893298: Updated [Varbase Bootstrap Paragraphs] module
                  from 8.x-4.x-dev to 8.4.0-alpha1
* Issue #2883671: [Vartheme] Refactoring CSS/LESS structure in the Vartheme
                  and VARTHEME_SUBTHEME themes to use SMACSS, and having
                  each part as libraries.
* Issue #2892027: Fixed View mode in Embed media form, as it is not working
                  in WYSIWYG.
* Issue #2891609: [Varbase Media] Added default image style, and changed the
                  config for default view mode for image media bundle.
* Issue #2886156: Have [Varbase Webform] Enabled for [Varbase Landing] feature
                  module to use it for the paragraphs webform element type.
* Issue #2891629: Updated [Varbase profile] features bundle default config.

### Added since the last release:

* Issue #2892170: Added logo-print to be used when printing only in varbase
                  theme
* Issue #2891677: Added permission for editor (View own unpublished content)
* Issue #2886100: Added patch for label (Title) not set for Views block
                  (exposed filters in Block).
* Issue #2891595: Added [Shield] module but not enabled.
* Issue #2887298: Added new [Varbase Search] component, to use search_api
                  module in search feature, and have it in the Extra Components
                  installation step.
* Issue #2892894: Added the Patch for Support translatable paragraph entity
                  reference revision field.
* Issue #2891609: Added default image style, and changed the config for default
                  view mode for image media bundle.
* Issue #2888006: Added [Color field] module, but not enabled.
* Issue #2891675: Enabled (Create new revision) for Basic block.
* Issue #2893352: Enabled [entity reference revisions] module on update.
* Issue #2893357: Enabled [views reference] module on update.
* Issue #2891909: Changed form of edit entity image on field to look like same
                  as form for embed in WYSIWYG
* Issue #2884401: Optimization for the post Drupal Scaffold, and Sub Profile
                  Procedure.
* Issue #2888454: Buttered up the Behat VarbaseContext

### Updates since the last release:

* Issue #2884546: Updated [Drupal core] from 8.3.2 to 8.3.3
* Issue #2888285: Updated [Drupal core] from 8.3.3 to 8.3.4
* Issue #2892545: Updated [Drupal core] from 8.3.4 to 8.3.5
* Issue #2885563: Updated [Varbase Editor] feature module from 8.4.12 to 8.4.13
* Issue #2885559: Updated [Anchor Link] module from 8.1.4 to 8.1.5
* Issue #2891929: Updated [Varbase Editor] feature module from 8.4.13 to 8.4.14
* Issue #2891913: Have Center for other HTML elements in Rich text editor.
* Issue #2893255: Updated [Varbase Editor] feature module from 8.4.14 to 8.4.15
* Issue #2887346: Updated [View modes inventory] module
                  from 8.1.0-alpha2 to 8.1.0-beta1
* Issue #2887297: Fixed Wrong naming of CONTENT_TYPE at config_templates for
                  Vertical media teaser - large.
* Issue #2893251: Updated [View modes inventory] module
                  from 8.1.0-beta1 to 8.1.0-beta2
* Issue #2893238: Fixed anchor all linking on view modes.
* Issue #2892564: Updated [Content locking (anti-concurrent editing)] module
                  from 8.1.0-alpha1 to 8.1.0-alpha2
* Issue #2882955: Updated [webform] module from 8.5.0-beta11 to 8.5.0-beta12
* Issue #2890638: Updated [Webform] module from 8.5.0-beta13 to 8.5.0-beta14
* Issue #2891777: Updated [webform] module from 8.5.0-beta14 to 8.5.0-beta15
* Issue #2882953: Updated [Metatag] module from 8.1.0 to 8.1.1
* Issue #2890640: Updated [Responsive Theme Preview] module
                  from 8.1.0-alpha5 to 8.1.0-alpha6
* Issue #2890642: Updated [Search API] module from 8.1.1 to 8.1.2
* Issue #2890643: Updated [SMTP Authentication Support] module
                 (Security update ) from 8.1.0-beta2 to 8.1.0-beta3
* Issue #2892262: Updated [Image Optimize (or ImageAPI Optimize)] module
                  from 8.2.0-alpha2 to 8.2.0-alpha3
* Issue #2887276: Updated [Honeypot] module from 8.1.25 to 8.1.26

### Fixes since the last release:
* Issue #2884315: Fixed [Varbase Media] issue with Image Caption doesn't
                  fit the image.
* Issue #2887494: Fixed [Varbase Admin] issue for the checkboxes and radio
                  buttons validation from Adminimal admin theme.
* Issue #2883671: Fixed [Vartheme] to set the proper directory for the
                  Bootstrap Glyphicon font.
* Issue #2890704: Fixed [Varbase Landing] paragraph names to
                 (Component and Components)
* Issue #2884325: Fixed Wrong HTML "all languages" in details field group
                  from Classy theme
* Issue #2891609: Fixed the automated functional test after default view
                  mode for image media bundle.
* Issue #2891905: Fixed an issue of background edge to edge (bg-edge2edge)
                  with scrolling
* Issue #2888454: Fixed travis-ci speed of processing the functional
                  automated tests.
* Issue #2892788: Removed editor configuration from filter configuration
                  basic_html / plain_text
* Issue #2885447: Reverted back to 4.6.2 version of [anchor, link, fakeobjects]
                  CKEditor pligins, to fix the issue of plugin versions
                  breaks edit functionality.
* Issue #2886156: Removed the preview for paragraphs in the [Varbase Landing].
* Issue #2893241: Varbase 8.4.05: Updated [CHANGELOG.md, UPDATE.md] files and
                  filtered the code for Drupal 8 Coding Standard.

## 8.4.04
* Issue #2871377: Updated [Entity Browser] module from 8.1.0-rc2 to 8.1.0 , and
                  Updated the patch for entity browser 8.x-1.0
* Issue #2872094: Updated [Display Suite] module from 8.3.0-beta2 to 8.3.0-beta3
* Issue #2872095: Updated [webform] module from 8.5.0-beta11 to 8.5.0-beta12
* Issue #2872100: Added [DRD Agent] module base code, but not enabled.
* Issue #2872103: Added [Node Edit Protection] module.
* Issue #2870172: Added [ Feature: Navigational Features - Other menus.
                  - Standard menus ] for Automated Functional Testing.
* Issue #2870172: Removed [ Feature: Navigational Features - Other
                  menus - Standard menus ] .
* Issue #2872284: Enabled [Admin Toolbar Extra Tools] module.
* Issue #2872284: Added the varbase x-small emblem white logo to the admin
                  toolbar with the varbase/toolbar.icon library.
* Issue #2872284: Added an Updated function to nable Admin Toolbar Extra Tools
                  module in the next update.
* Issue #2873260: Updated [Devel] module from 8.1.0-rc1 to 8.1.0-rc2
* Issue #2873263: Updated [video embed field] module from 8.1.4 to 8.1.5
* Issue #2874207: Updated [Varbase Editor] feature from 8.4.6 to 8.4.7
* Issue #2874207: Added the [CKEditor - BiDi (Text Direction)] library to to
                  varbase code because it^s not listed in the Drupal.org
                  Library Packaging Whitelist, we will move the command to get
                  the library in the drupal-org.make file, until it been added
                  to the Packaging Whitelist https://www.drupal.org/node/2874359
* Issue #2874409: Updated [ctools] module from 8.3.0-beta2 to 8.3.0
* Issue #2874429: Updated [Pathauto] module from 8.1.0-rc1 to 8.1.0
* Issue #2874442: Updated [token] module from 8.1.0-rc1 to 8.1.0
* Issue #2874479: Updated [page manager] module from 8.4.0-beta1 to 8.4.0-beta2
* Issue #2874483: Updated [panelizer] module from 8.4.0-beta3 to 8.4.0
* Issue #2874485: Updated [panels] module from 8.4.0-beta1 to 8.4.0
* Issue #2874602: Updated [View Modes inventory] module
                  from 8.1.x-dev to 8.1.0-alpha1
* Issue #2874737: Updated [panels] module from 8.4.0 to 8.4.1
* Issue #2874798: Updated [Varbase Hero Slider Media] feature module from
                  8.4.0-alpha6 to 8.4.0-beta1
* Issue #2875297: Updated [Varbase Editor] feature from 8.4.7 to 8.4.8
* Issue #2875297: Updated [ Feature: Content Editing - Rich Text Editor -
                  Input formats ] automated functional test.
* Issue #2875352: Added newly installed modules in update hook (only modules
                  that makes sense).
* Issue #2871079: Optimization round no. 2 for varbase admin theme.
* Issue #2875477: Disabled [ds_switch_view_mode] module.
* Issue #2875498: Updated [Varbase Editor] feature from 8.4.8 to 8.4.9
* Issue #2875352: Enable newly installed modules and disable not needed modules.
                  in the update function to cover updates from far early
                  versions.
* Issue #2875600: Updated [Varbase Editor] feature from 8.4.9 to 8.4.10
* Issue #2875352: Added newly installed modules in update hook (only modules
                  that makes sense).
* Issue #2875625: Updated [Drupal core] from 8.3.1 to 8.3.2
* Issue #2875673: Updated [adminimal admin toolbar] from 8.1.3 to 8.1.4
* Issue #2875677: Updated [Display Suite] module from 8.3.0-beta2 to 8.3.0-beta4
* Issue #2871254: [Varbase Media] Optimization round no. 4 , and various
                  admin theme enhancement.
* Issue #2877015: Added [Mail Editor] module.
* Issue #2877033: Added [Honeypot] module.
* Issue #2877033: Updated [varbase security] feature: Have honeypot with log
                  been sat to true.
* Issue #2877053: Added [Taxonomy access fix] module.
* Issue #2877070: Added [Better Exposed Filters] module.
* Issue #2877079: Added [Menu Admin per Menu] module.
* Issue #2877214: Added [Link Attributes widget] module.
* Issue #2877221: Added [Custom Permissions] module.
* Issue #2877228: Updated [Display Suite] module from 8.3.0-beta4 to 8.3.0-rc1
* Issue #2877230: Removed Trivial Automated Functional tests, which needs big
                  time from the robot.
* Issue #2871254: [Varbase Media] Optimization round no. 4 : Added the Symfony
                  Component Yaml namespace.
* Issue #2877414: Removed [Custom Permissions] module
* Issue #2877427: Updated [Varbase Hero Slider Media] feature module
                  from 8.4.0-beta1 to 8.4.0-beta2
* Issue #2877575: Updated [DRD Agent] from 8.3.0 to 8.3.1
* Issue #2877702: Added the Patch for [Real-time SEO] module to have [ Text 
                 (plain, long) ] filed type [string_log] for yoast seo to use.
* Issue #2878288: Updated [Bootstrap] theme from 8.3.3 to 8.3.4
* Issue #2878290: Updated [Honeypot] module from 8.1.24 to 8.1.25
* Issue #2878292: Theme edits for Vartheme: Move title above tabs.
* Issue #2877033: Moved capatch and recaptcha config to config/optional
* Issue #2878296: Add field description to Varbase Core.
* Issue #2875352: Fixed the updated function to NOT enable CAPTCHA, and
                  reCAPTCHA, But Enable ACE Editor module.
* Issue #2878061: Added Theme Settings for Vartheme (base theme)
                  with header full-width option.
* Issue #2878061: Optimization for Vartheme Settings to work with
                  VARTHEME_SUBTHEME too.
* Issue #2878292: Theme edits for Vartheme about edge to edge and bootstrap
                  spacing and no spacing.
* Issue #2879178: [Varbase Media] Media Enhancements
* Issue #2879178: Updated [Feature: File & Media Management - Assets Management
                  - Ability to embed existing meida image library in the rich
                  text editor] Automated Functional Test.
* Issue #2879251: Updated [Bootstrap] theme from 8.3.4 to 8.3.5
* Updated .travis.yml file : Removed test matrix for PHP7.1
* Issue #2879403: Updated [Display Suite] module from 8.3.0-rc1 to 8.3.0
* Issue #2879645: Updated [Varbase Media] Feature: Revised naming for Entity
                  browsers, and bettered up the upload behaviour with edit.
* Issue #2880116: Updated [dropzonejs] module from 8.1.0-alpha6 to 8.1.0-alpha7
* Issue #2880252: Updated [CKEditor bidi button] module from 8.1.x-dev to 8.1.0
* Issue #2874207: Have CKEditor - BiDi (Text Direction) added to the Packaging
                  Whitelist https://www.drupal.org/node/2874359, So we are
                  calling it in the .make build file and composer.
* Issue #2881032: Updated [Responsive Theme Preview] module
                  from 8.1.0-alpha4 to 8.1.0-alpha5
* Issue #2879178: [Varbase Media] Media Enhancements: Editing title and alt in
                  WYSIWYG in Varbase when adding Media embed
* Issue #2881954: Updated Media Sizing Media sizes and Responsive View Modes,
                  Added view modes for "Media" to be same as Responsive image
                  styles, Edited responsive image styles according to new
                  standard, Added e2e image style (Edge to Edge) for both
                  responsive and standard.
* Issue #2882075: Updated [blazy] module from 8.1.0-rc1 to 8.1.0-rc2
* Issue #2882078: Updated [Display Suite] module from 8.3.0 to 8.3.1
* Issue #2882100: Updated [slick] module from 8.1.0-rc3 to 8.1.0
* Issue #2882103: Updated [Slick Media] module from 8.1.0-rc1 to 8.1.0
* Issue #2882108: Updated [CKEditor BiDi Buttons] module from 8.1.0 to 8.2.0
* Issue #2882145: Updated [anchor link] module from 8.1.3 to 8.1.4
* Issue #2882144: Updated [Varbase editor] feature module from 8.x-4.10 to 8.4.11
* Issue #2882198: Updated [CHANGELOG.md, UPDATE.md] files and filtered the code
                  for Drupal 8 Coding Standard.

## 8.4.03
* Issue #2868568: Updated [Bootstrap] theme from 8.3.2 to 8.3.3
* Issue #2865977: Establishing profile inheritance for new distros
* Issue #2869287: Disabled [imagemagick] module on install, as some basic
                  servers do not have needed functions for imagemagick to work.
* Issue #2869329: Optimized varbase installation Config and ConfigBit engine,
                  for sub profiles integrations
* Issue #2865977: Change the location of libraries from Varbase profile folder
                  to the Drupal root of th project.
* Issue #2865977: Have libraries in the list of enabled modules in order after
                installing Drupal core, and Varbase core and default features
                installation step.
* Issue #2870032: Updated [Redirect] module from 8.1.0-alpha4 to 8.1.0-alpha5
* Issue #2870025: Changed Layouts of [Default, and Full Content] view modes to
                use [Bootstrap layouts] for Landing page, and Basic Pages.
* Issue #2870172: Added [ Feature: Website Base Requirements - Website Languages
                - English ] for Automated Functional Testing
* Issue #2870172: Added [ Feature: Content Editing - Rich Text Editor - Easy
                linking to internal content by searching for content by its
                titles ] for Automated Functional Testing.
* Issue #2870172: Added [ Feature: Content Editing - Rich Text Editor - Input
                formats ] for Automated Functional Testing.
* Issue #2870172: Added [ Feature: Content Structure Features - Basic Pages
                - Basic page ] for Automated Functional Testing.
* Issue #2870172: Added [ Feature: Content Structure Features - Basic Pages
                - Pages with pre-defined layouts] for Automated Functional
                Testing.
* Issue #2870172: Added [ Feature: Content Editing - Rich Text Editor - Easy
                linking to internal content by searching for content by its
                titles ] for Automated Functional Testing
* Issue #2870617: Removed 2845037_15.patch for the [Entity Browser] module
* Issue #2870172: Updated Behat Step definitions for [Editor Media Browser] and
                to click, or double click on an image with the provided
                title/alt text.
* Issue #2870172: Added [ Feature: File & Media Management - Assets Management
                - Ability to embed existing media image library in the rich
                text editor ] for Automated Functional Testing.
* Issue #2870969: Updated [ctools] module from 8.3.x-dev to 8.3.0-beta2
* Issue #2870974: Updated [panels] from 8.4.x-dev to 8.4.0-beta1
* Issue #2870977: Updated [Page Manager] from 8.4.x-dev to 8.4.0-beta1
* Issue #2870980: Updated [Panelizer] from 8.4.0-beta2 to 8.4.0-beta3
* Issue #2870985: Removed 2868095-2.patch for the [bootstrap layouts] module:
                as the patch were committed.
* Issue #2871201: Updated [Drupal core] from 8.3.0 to 8.3.1

## 8.4.02
* Issue #2864089: Updated [Crop API] module from 8.1.0 to 8.1.1
* Issue #2864090: Updated [Slick Carousel] module from 8.1.0-rc2 to 8.1.0-rc3
* Issue #2864150: Updated [Varbase Editor] from 8.4.5 to 8.4.6
* Issue #2864258: Enable [ImageMagick] module by default for the image took kit
* Issue #2864261: Added [Image Optimize (or ImageAPI Optimize)] module
* Issue #2864292: Added [Fast 404] module
* Issue #2864315: Added [Rabbit Hole] module: Only Enabled [Rabbit Hole, Rabbit
                  Hole nodes, Rabbit Hole taxonomy] modules and basic settings
                  not to use for [page] and [landing page] content types
* Issue #2864258: Enabled [ImageMagick] module: Only Include and enabled, But
                  not configured as the default.
* Issue #2864454: Updated [Varbase Media Hero Slider] from 8.4.0-alpha4
                  to 8.4.0-alpha5
* Issue #2864606: Updated [Varbase Media Hero Slider] from 8.4.0-alpha5
                  to 8.4.0-alpha6
* Issue #2864315: Added [Rabbit Hole] module: Added Permissions to bypass for
                  [Content admin, and Site admin].
* Issue #2864624: Updated [Chaos tool suite (ctools)] module from 8.3.0-alpha27
                  to 8.3.0-beta1
* Issue #2864360: Added [Mail System, SMTP] modules
* Issue #2864360: Enabled [Mail System, SMTP] modules
* Issue #2864966: [Vartheme] Add [Varbase/bootstrap-print] less/css library in
                  base theme (vartheme)
* Issue #2864966: [Vartheme] Optimized to use only in vartheme not the subtheme,
                and Updated the varbase/bootstrap-print lib to have RTL
                (Right to Left) in print too.
* Issue #2864966: [Vartheme] Updated the varbase/bootstrap-print lib to Hide
                link's href URL in print.
* Issue #2865176: Updated [embed] module from 8.1.0-rc3 to 8.1.0
* Issue #2865179: Updated [Simple Sitemap] module from 8.2.x-dev to 8.2.9
* Issue #2865397: [Vartheme] Themed Site maintenance page
* Issue #2865409: [Varbase Security] Reconfigured CAPTCHA
* Issue #2865464: [Varbase Internationalization] Added Localization client
                [l10n_client] module
* Issue #2866246: Update [Drupal core] from 8.2.7 to 8.3.0-rc2
* Issue #2866733: Updated [Crop API] from 8.1.1 to 8.1.2
* Issue #2866967: Updated [Webform] module from 5.0-beta9 to 5.0-beta10
* Issue #2865977: Establishing profile inheritance for new distros: Added the
                patch for Drupal 8.3.x to Allow profiles to provide a
                base/parent profile and load them in the correct order.
* Issue #2867007: Updated [Panelizer] from 8.x-4.x-dev to 8.4.0-beta2
* Issue #2867009: Updated [panels] from 8.x-4.x-dev to 8.4.0-alpha1
* Issue #2867287: Updated [Drupal core] from 8.3.0-rc2 to 8.3.0
* Issue #2867301: Updated [Yoast seo][Real-time SEO for Drupal] module
                  from 8.1.1to 8.1.2
* Issue #2867287: Updated [Varbase features] to work with the new Drupal 8.3.x
                  config set.
* Issue #2867287: Fixed the issue of [l10n_client] Incompatible with this
                  version of Drupal core 8.3.0
* Issue #2867983: Updated [Admin Toolbar] module from 8.1.18 to 8.1.19
* Issue #2867988: Updated [Display Suite] module from 8.3.0-beta1 to 8.3.0-beta2
* Issue #2867989: Updated [Webform] module from 8.5.0-beta10 to 8.5.0-beta11
* Issue #2868006: Updated [Masquerade] module from 8.1.0-beta1 to 8.2.0-beta1
* Issue #2868067: Updated [Page Manager] from 1.x-dev to 4.x-dev
* Issue #2867287: Updated [Drupal core] from 8.3.0-rc2 to 8.3.0 : Fix for the
                  issue of not having plugin.manager.core.layout on update with
                  [bootstrap_layouts] module 8.x-5.x-dev .
* Issue #2867009: Updated [panels] module back from 8.4.0-alpha1 to 8.x-4.x-dev
                  to work with page manager updates to drupal 8.3.0
* Issue #2868291: Added CHANGELOG.md and UPDATE.md files, And Updated
                  the README.md file.
* Issue #2868307: Updated [Rabbit Hole] module from 8.1.0-beta2 to 8.1.0-beta3
* Issue #2868352: Fixed an issue to have an auto configured entity browser
                  enhanced for the Library browsing widgets used in
                  [varbase hero slider media] and [varbase carousels] apps.

## 8.4.01
* Issue #2862873: Have [homepage] Panel page with default text.
* Issue #2863032: Updated [Varbase SEO] feature: Fixed issue with initialization
                  of yoast seo configs for [Varbase Page] and [Varbase Landing]
                  features.
* Issue #2863034: [Security update] Updated [Linkit] module from 8.4.2 to 8.4.3
* Issue #2863040: Updated [dropzonejs] module from 8.1.0-alpha5 to 8.1.0-alpha6

```
composer create-project Vardot/varbase-build:^8.4.01 PROJECT_DIR_NAME --no-dev
```

## 8.4.0
* Issue #2852492: Corrected typos in the Multilingual configuration
                  installation step.
* Issue #2852508: Added [Ultimate Cron] module with the 8.2.0-alpha1
* Issue #2852531: Added [Persistent Login] module with 8.1.0-alpha2 and had it
                  enabled by default
* Issue #2852867: Updated [Redirect] module from 8.1.0-alpha3 to 8.1.0-alpha4
* Issue #2852610: Updated [Varbase admin] feature module: Added [User protect]
                  module and configuration to allows fine-grained access control
                  of user administrators.
* Issue #2853623: Updated [Varbase admin] feature: Added [RoleAssign] module and
                  configuration for assigning Site admin role assigning
                  permissions.
* Issue #2853623: Added [ Feature: User Management - Standard User Management
                  - Users with permission to assign roles may select which roles
                  are available for assignment. ] automated functional testing
                  feature.
* Issue #2853714: Updated [dropzonejs] module from 8.1.0-alpha3 to 8.1.0-alpha4
* Issue #2853986: Added [Varbase security] feature: which manages general
                  security configurations, with password policy, username
                  enumeration prevention, security kit and review
* Issue #2854002: Added [reCAPTCHA] module
* Issue #2853986: Updated [ Feature: User Management - Standard User Management
                  - Request new password] automated functional testing after we
                  added [Varbase security] feature.
* Issue #2854404: Updated [Bootstrap] theme from 8.3.1 to 8.3.2
* Issue #2854421: Updated [dropzonejs] module from 8.1.0-alpha4 to 8.1.0-alpha5
* Issue #2854426: Updated [Entity Browser] module from 8.1.0-rc1 to 8.1.0-rc2
* Issue #2854472: Updated [Drupal core] patch to 2479377-30.patch for canonical
                  link before generating a URL
* Issue #2855365: Updated [features] module from 8.3.2 to 8.3.3
* Issue #2856029: Updated [panels] module from 8.3.0-beta5 to 8.3.0-beta6
* Issue #2856210: Updated [password policy] from 8.3.x-dev to 8.3.0-alpha3
* Issue #2856291: Added [Views Bootstrap] module
* Issue #2856919: Updated [Features] from 8.3.3 to 8.3.4
* Issue #2856925: Added [Focal Point] module and had it enabled by default with
                  the crop module
* Issue #2856925: Updated [Varbase Media] feature: Added Aspect ratios for image
                  styles with ( standard 16:9, traditional 4:3, and square 1:1 )
                  , and having the focal point and crop in use with [Responsive
                  image styles] and the list of (d1, d2, d3, d4, d5 , d6, d7,
                  d8, d9, d10, d11, d12) with option of standard 16:9,
                  traditional 4:3, and square 1:1
* Issue #2857923: Updated [Persistent Login] module from 8.1.0-alpha2
                  to 8.1.0-alpha3
* Issue #2853988: Add option to rewrite robots.txt on staging enviroments
* Issue #2853988: Optimized the post Drupal Scaffold Procedure
* Issue #2857954: Redirect module settings in varbase_seo feature
* Issue #2856925: Have media image bundle with [ Full (12 cols), XLarge (8 cols)
                  , Large (6 cols), Medium (4 cols), Small (3 cols), XSmall
                  (2 cols) ] with Display (cols #) responsive standard 16:9.
* Issue #2856925: Updated [Varbase Media] feature: Fixed entity view mode media
                  large of images not to have a link to the media.
* Issue #2858695: Updated [ImageMagick] module from 8.1.0-alpha5 to 8.1.0-alpha6
* Issue #2858696: Updated [features] module from 8.3.4 to 8.3.5
* Issue #2856925: Updated [Varbase Media] feature: Added Cropped
                  [ Full (12 cols), Large (6 cols), Medium (4 cols),
                  Small (3 cols), XLarge (8 cols), XSmall (2 cols) ] view modes
                  for media bundles, and configure them for Image, Video thumbs.
* Issue #2858752: Updated [Varbase SEO] feature: Added recommended default
                  config for Google Analytics module.
* Issue #2859115: Changed version: value to 8.x-4.x-dev in info.yml for Varbase
                  profile and all built in features
* Issue #2861066: Updated [Drupal core] from 8.2.6 to 8.2.7
* Issue #2861131: Removed [Varbase user] and [Varbase site] features: All their
                  config were moved to the Varbase profile s config
* Issue #2861205: Enabled [Configuration Update Reports] module
* Issue #2861205: Updated [ Feature: Add default [Configuration Update Manager]
                  module testing configuration. ] to have And the [Configuration
                  Update Reports] checkbox should be checked.
* Issue #2861212: Added [Admin Toolbar, Adminimal Admin Toolbar] modules
* Issue #2861232: Added [menu_block] module
* Issue #2861237: Added [Responsive preview] module
* Issue #2861247: Enable [Ultimate Cron] module by default
* Issue #2861271: Enabled [Entityqueue] module by default
* Issue #2862091: Initialization of [Varbase Webform] feature
* Issue #2861273: Optimize [Varbase SEO] feature: Optimization round no. 3 :
                  Have RDF enabled with Varbase SEO + Added Add Yoast Module 
                  + Enabled [Metatag Facebook, Open Graph, Verificatio,
                  Twitter Cards, Google Plus, Mobile & UI Adjustments, hreflang]
                  modules + Added Simple XML Sitemap. Remove XML Sitemap.
* Issue #2861273: Optimize [Varbase SEO] feature: Updated all effective features
* Issue #2861273: Optimize [Varbase SEO] feature: Optimization round no. 3 :
                  Enabled [redirect 404] module.
* Issue #2862156: Add [Content locking (anti-concurrent editing)] module
* Issue #2862181: Optimization round no. 2 for [Varbase Security] feature:
                  Enabled [Captcha] and [reCAPTCHA] modules.
* Issue #2862194: Updated [Varbase Landing] feature: Enabled [Panelizer Quick
                  Edit] module
* Issue #2862202: Updated [Varbase Development] feature: Optimization round
                  no. 2
* Issue #2862389: Added [View Modes Inventory] module to them default selected
                  extra components
* Issue #2862438: Add twig debugging to development.services.yml
* Issue #2862438: Optimization for the Post Drupal Scaffold Procedure.
* Issue #2862202: Updated [Varbase Development] feature: Optimization round
                  no. 2
* Issue #2862579: Updated [Varbase Media] feature: Updated needed configs
* Travis build: https://travis-ci.org/Vardot/varbase/builds/213496318

```
composer create-project Vardot/varbase-build:^8.4.0 PROJECT_DIR_NAME --no-dev
```

## 8.4.0-rc1
* Issue #2843810: Conflicts between subtheme and base theme stylesheets
* Issue #2844962: Updated [pathauto] module from 8.1.0-beta1 to 8.1.0-beta2
* Issue #2844968: Updated [Configuration Update Manager] module from 8.1.2
                  to 8.1.3
* Issue #2844977: Updated [entity browser] module from 8.1.0-beta3
                  to 8.1.0-beta4
* Issue #2844977: Fixed the issue of Call to a member function
                  getConfigDependencyKey() on null on [Widget view],
                  and [SelectionDisplay view].
* Issue #2845053: Updated [Varbase Media] feature: Updated the configurations
                  of media browsers to have auto_select: false
* Issue #2845866: Updated [Vartheme and VARTHEME_SUBTHEME] themes: Disabled
                  bootstrap [forms smart descriptions]
* Issue #2845837: Added the [Varbase Internationalization] features: which
                  manages Varbase internationalization, languages, and
                  translation support.
* Issue #2846375: Fixed broken thumbnail media entity
* Issue #2846375: Fixed the default view mode for document.
* Issue #2846662: Updated [Entity Browser Enhanced] module from 8.1.0-beta3
                  to 8.1.0-beta4
* Issue #2846985: Updated [Entityqueue] module: Updated the patch to Have
                  Entityqueue tab inside the full content page.
* Issue #2847999: Updated [pathauto] module from 8.1.0-beta2 to 8.1.0-rc1
* Issue #2848870: Updated [Metatag] module from 8.1.0-beta12 to 8.1.0
* Issue #2849733: Updated [redirect] module from 8.1.0-alpha2 to 1.0-alpha3
* Issue #2845837: Switched to single language varbase, and on install to have
                  the option to select if the site is a Multi-language
* Issue #2845837: Added
                  [varbase_multilingual_configration.enable_multilingual=true]
                  to [drush site-install varbase] command to work with
                  .travis.yml and build.xml
* Issue #2845837: Updated [ Feature: Website Base Requirements -
                  Website Languages - All content translatable to all
                  languages ] automated functional test.
* Issue #2845837: Fixed issues with travis-ci.org to work with fetching
                  translations from drupal.org , we have problems with php5.6.
* Issue #2850756: Updated [Drupal core] from 8.2.5 to 8.2.6
* Issue #2850803: Updated [Entity Browser] module from 8.1.0-beta4 to 8.1.0-rc1
* Issue #2850832: Updated [panelizer] module from 8.3.0-alpha3 to 8.3.0-beta1
* Issue #2845837: Fixed issues with installing varbase with Arabic or French
                  as the default language of install and default language for
                  the site.
* Issue #2845837: Updated the Varbase - Default installation testing features.
* Issue #2851207: Added [varbase heroslider media] feature module
* Issue #2851868: Added [Varbase Carousels] feature module to varbase
* Issue #2851207: Updated [varbase heroslider media] feature module from
                  8.4.0-alpha3 to 8.4.0-alpha4

## 8.4.0-beta17
* Issue #2843606: Updated [Video Embed Field] module from 8.1.3 to 8.1.4
* Issue #2843609: Updated [entity browser] module from 8.1.0-beta2
                  to 8.1.0-beta3
* Issue #2843618: Fixed Typo in subtheme name in readme file
* Issue #2843640: Missing bootstrap libraries include in theme info file
* Issue #2844162: Updated [Entity Browser] module: Added a patch for
                  reference error
* Issue #2844177: Updated [Diff] module from 8.1.0-beta2 to 8.1.0-rc1
* Issue #2844211: Updated the composer.json to better up the type drupal-library
* Issue #2844226: Updated [Vartheme, VARTHEME_SUBTHEME, Vartheme_admin] themes:
                  to have a better Behaviors format of JavaScript files not to
                  have any errors.

## 8.4.0-beta16
* Issue #2841909: Updated [Linkit] module from 8.4.1 to 8.4.2
* Issue #2842204: Updated [entityqueue] module: Moved to latest DEV Commit
                  0ec6234 on 8.x-1.x, and not to use the tab patch
* Issue #2842214: Updated [Entity Browser Enhanced] module from 8.1.0-beta2
                  to 8.1.0-beta3
* Issue #2842204: Added a Drupal patch, so that we do not have the canonical
                  link before generating a URL
* Updated the Github account https://github.com/Vardot/varbase to sync with
 the Drupal.org project git account and show up at
 https://packagist.org/packages/vardot/varbase
 https://travis-ci.org/Vardot/varbase/jobs/190387469

```
composer create-project Vardot/varbase-build:8.4.0-beta16 PROJECT_DIR_NAME
```

## 8.4.0-beta15
* Issue #2841893: Updated Varbase Composer: Switched vendor from
                  drupal/varbase to vardot/varbase

## 8.4.0-beta14
* Issue #2839453: Added [Vartheme admin] theme: To have a custom simple
                  one-column, tableless, minimalist administration theme
* Issue #2839673: Downgraded Drush from ^9.0.0 to ^8.0.0 version in the
                  composer.json file
* Issue #2839841: Updated the Installation process with [Extra components,
                  Assemble extra components] to let site builders enable listed
                  features on install
* Issue #2841190: Updated [Token] module from 8.1.0-beta2 to 8.1.0-rc1
* Issue #2841192: Updated [metatag] module from 8.1.0-beta11 to 8.1.0-beta12
* Issue #2841194: Updated [Drupal core] from 8.2.4 to 8.2.5

## 8.4.0-beta13
* Issue #2838070: Updated [Varbase Media] feature: Style and CSS Optimization
* Issue #2815283: Updated [Vartheme] to have RTL template ready, and RTL auto
                  switching for RTL and LTR languages
* Issue #2838373: Updated [panels ipe] module: Added a patch Need RTL completely
                  support for right to left language like Arabic, Farsi, etc
* Issue #2838415: Updated [Vartheme] theme: Changed the LESS/CSS architecture of
                  files to follow the SMACSS-style categorization of its
                  CSS/LESS rules
* Issue #2838607: Patched [Coffee] module: to fix the [right to left (rtl)] ,
                  and the [input parameters mismatch] issues
* Issue #2838625: Patched [Entityqueue] module: To fix the [Subqueue views
                  relation: Doubled/redundant entries] and [canonical link] issues
* Issue #2838959: Patched [dropzonejs] module: to enhance media upload
* Updated [Vartheme] theme: Removed none placed blocks.
* Issue #2839032: Updated [Varbase site] feature: Added [pathologic] module and
                  Global [Processed URL format] to [ Path relative to server
                  root] as default config
* Issue #2839035: Updated [Varbase Editor] feature from 8.4.4 to 8.4.5

## 8.4.0-beta12
* Issue #2819209: custom (suggestion) page template based on content types :
                  page--(content type name).html.twig
* Issue #2834053: Updated [Entity API] module from 8.1.0-alpha3 to 8.1.0-alpha4
* Issue #2834518: Updated [imagemagick] module from 8.1.0-alpha4 to 8.1.0-alpha5
* Issue #2834599: Updated [bootstrap layouts] module from 8.4.0 to 8.4.1
* Issue #2835046: Updated [features] module from 8.3.1 to 8.3.2
* Issue #2835104: Updated [Varbase Editor] feature from 8.4.2 to 8.4.3
* Issue #2835016: Updated [Varbase media] feature: Optimized the WYSIWYG embed
                  from editor media browser
* Issue #2835797: Updated [Drupal core] from 8.2.3 to 8.2.4
* Issue #2835016: Updated [Varbase media] feature: Optimized the WYSIWYG embed
                  from editor media browser - Switched to Small / 3/12 -
                  Medium / 6/12 - Full / 12/12
* Issue #2835016: Updated [Varbase user] featur: Updated the access for users
                  to upload and see media entities.
* Issue #2835016: Updated [Varbase media] feature: Added the Varbase media
                  common library style. and the Varbase media common logged
                  in users style.
* Issue #2836879: Updated [Entityqueue] module from 8.1.0-alpha4 to 8.1.0-alpha5
* Issue #2836907: Updated [External Links] module from 8.1.0-alpha3 to 8.1.0
* Issue #2836919: Updated [redirect] module from 8.1.0-alpha1 to 8.1.0-alpha2
* Issue #2836879: Updated [Entityqueue] module from 8.1.0-alpha4 to 8.1.0-alpha5
                  + Issue #2836962 by amateescu: Bring back compatibility
                  with Drupal 8.2.x
* Issue #2836978: Updated [Entityqueue] module from 8.1.0-alpha5 to 8.1.0-alpha6
* Issue #2836982: Updated [panelizer] module from 8.3.0-alpha2 to 8.3.0-alpha3
* Issue #2836982: Updated [panelizer] module from 8.3.0-alpha2 to 8.3.0-alpha3
* Issue #2835016: Updated [Varbase media] feature: Optimized the WYSIWYG entity
                  embed, with basic figure.align-center, figure.align-right,
                  figure.align-left
* Issue #2835016: Updated [Varbase media] feature: Optimized Fixed normal
                  image aligns.
* Issue #2837787: Updated [Varbase Editor] feature from 8.4.3 to 8.4.4


## 8.4.0-beta11
* Issue #2826916: Have 4 Patches to Get Entityqueue on Drupal 8 Behave as it
                  Should Be.
* Issue #2802707: Modules with link as a dependency add drupal/link-link as
                  composer requirement.
* Issue #2826916: Added the [ Feature: Module Requirements - Standard Entity
                  Queue Management - Have Entityqueue tab inside the full
                  content page and be able to Add to a queue or Remove from a
                  queue ] Automated testing feature.
* Issue #2827824: Added [Varbase Media] feature: Manages type of media contents
                  and entity browsers in the site
* Issue #2828002: Updated [Entity Browser] module from 8.x-1.0-alpha10
                  to 8.x-1.0-beta1
* Issue #2828643: Updated Drupal from 8.2.2 to 8.2.3
* Issue #2829095: Updated [features] module from 8.x-3.0 to 8.x-3.1
* Issue #2827824: Add the patch for [Entity Browser] on issue #2809659
* Issue #2827824: Updated [Varbase Core] Have storage fields of image and images
                  for block content and taxonomy terms.
* Issue #2827824: Updated [Varbasee site] feature: to work well with the
                  [Varbase media] feature.
* Issue #2827824: Updated [Varbasee media] Changed the config for entity
                  browsers, and browsers view.
* Issue #2827824: Updated [Varbasee media] feature: Removed the Example feature
                  to have it as [Varbase media example] feature.
* Issue #2829232: Added [Varbase Development] feature: Manages Development
                  Environment Modules and Features, make sure to disable this
                  feature in production
* Issue #2829232: Updated [travis-ci] automated testing to install Varbase
                  Development feature on the automated testing job.
* Issue #2829232: Added [Varbase Development] feature: Manages Development
                  Environment Modules and Features, make sure to disable this
                  feature in production
* Issue #2827824: Updated A new write for all features. and have the [features]
                  as it will do the process of config overriding for some
                  features.
* Issue #2827824: Updated [Varbase media] feature: Changed the use of entity
                  browser to the latest
                  1.x-dev#b21ea1dae48fd18991f51ade07804c7cc59c3b4b
* Issue #2827824: Updated [Varbase Media] feature: Switched file Upload
                  interface to Dropzonejs.
* Issue #2827824: Updated [Varbase Media] feature: Fixed the installer paths
                  for dropzone library for Dropzonejs.
* Issue #2827824: Updated [Varbase Media] feature: Fixed the installer paths
                  for dropzone library to libraries
* Issue #2827824: Updated [Varbase Media] feature: Moved to latest work on the
                  8.x-1.x-dev with 403612b620ecf41f31e5ff2eaa424d151d3257ef
                  and have the 2809659-17.patch over the module.
* Issue #2826916: Changed [Entityqueue] tothe latest work on 1.x-dev on commit
                  f755d8cbc7039eaa3b5d056648a8ef3956a83c1e and updated patches.
* Issue #2827824: Adjust the location of libraries
* Issue #2827824: Reordered the Entity Browser tabs to [Library] then Upload.
                  and Attached the Entity Browser Enhanced config for widgets.
* Issue #2827824: Updated the requirements on installation for [dropzonejs] with
                  a patch to make it work if the library was in the installation
                  profile.
* Issue #2827824: Updated [entity browser] module from 1.0-beta1 to 1.0-beta2
* Issue #2831053: Updated [field group] module from 1.0-rc4 to 1.0-rc5
* Issue #2830837: Support [core experimental] Settings Tray module
* Issue #2830837: Enabled the [Settings tray] ( outside_in ) module by default
* Issue #2830837: Removed the old vartheme_subtheme
* Issue #2831372: Updated [media entity] module from 8.1.5 to 8.1.6
* Issue #2831381: Updated [Field Group] module from 8.1.0-rc5 to 8.1.0-rc6
* Issue #2830837: Updated [Vartheme] and [VARTHEME_SUBTHEME] themes to reflect
                  the use of setting tray ( outside_in ) and used the bootstrap
                  library cdn jsdelivr version 3.3.7 as we had an issue with
                  3.3.5
* Issue #2831372: Updated [Entity Browser Enhanced] module from 1.0-beta1
                  to 1.0-beta2
* Issue #2831372: Updated [Varbase Media] feature: Have more generack browser
                  views and changed the size of entity browsers to width:
                  700 and height: 500
* Issue #2831497: Updated [Bootstrap] theme from 8.3.0 to 8.3.1
* Issue #2832046: Updated [Adminimal] responsive administration theme from 8.1.2
                  to 8.1.3
* Issue #2831372: Updated [Varbase Media] feature: Make a new view mode for
                  media entity called [Field Preview (field_preview)] and have
                  that view mode be the view mode to be displayed when selecting
                  an image.
* Issue #2831372: Updated [Varbase Media] feature: Removed the responsive image
                  styles config
* Issue #2832892: Updated [anchor link] module from 8.1.2 to 8.1.3
* Issue #2832893: Updated [bootstrap layouts] from 8.3.1 to 8.4.0 : Improvement
                  for bootstrap layout module
* Issue #2832907: Updated the composer installers and removed patches for drush
* Issue #2832893: Removed the patch on the [bootstrap layout module]
* Issue #2832893: Updated [varbase site 8.4.x] feature: Changed the layout for
                  the homepage to use the new format for the bootstrap layout
                  which comes with bootstrap_layout 8.4.0
* Issue #2832907: Fixed the issue of [drush site-install] by enabling - entity
                  module in the varbase profile, and Updated the composer to
                  drush ^9.0 
* Issue #2833475: Updated [Varbase Editor] feature from 8.4.1 to 8.4.2 to use
                  media from [Varbase Media] feature.
* Issue #2827824: Updated [Varbase Media] feature: Have the 
                  [Editor Media Browser] entity browser and the [media] Embed
                  button, ready to be used by the [Varbase Editor] feature.
* Issue #2833621: Added [ImageMagick] 8.x-1.0-alpha4 module but not enabled
* Issue #2833626: Changed permissions for Masquerade to only have the
                  webmaster or super admins
* Issue #2827824: Removed the Testing browser page and browser block.
* Issue #2827824: Updated [Varbase Media] feature: Have a better Sort filters
                  in Browsers.
* Issue #2827824: Updated [Varbase site] feature: Added permissions for [Editor,
                  content admin, and site admin] roles to (access image_browser
                  entity browser pages, access images_browser entity browser
                  pages, access editor_media_browser entity browser pages) .
* Issue #2827824: Updated [Varbase Media] feature: Switched the pager to Full
                  with default of 8 items.

## 8.4.0-beta10
* Issue #2824558: Updated Drupal from 8.2.1 to 8.2.2
* Issue #2825082: Added [Masquerade] module
* Issue #2825082: Updated [Varbase user] feature: Have site admin users with a
                  permission to masquerade as any user except the super user.
* Issue #2825082: Added the [ Feature: Support Requirements - Standard Support
                  Navigation - Allows site administrators to switch users and
                  surf the site as that user.] automated test.
* Issue #2825091: Added [Libraries API] module
* Issue #2825092: Added [Libraries UI] module
* Issue #2825096: Updated [features] module from 8.3.0-rc1 to 8.3.0
* Issue #2825097: Updated [Views Infinite Scroll] module from 8.1.2 to 8.1.3

## 8.4.0-beta9
* Issue #2824342: Changed the projects download branch to 8.x-4.x for
                  drupal-composer to update
* Issue #2824342: Switched form using packagist.drupal-composer.org
                  to packages.drupal.org/8 and pushed out 8.x-4.0-beta9
                  Now we can use:
      composer create-project Vardot/varbase-build:8.4.0-beta9 PROJECT_DIR_NAME

                  And it will work from the https://packages.drupal.org/8

## 8.4.0-beta8
* Issue #2823502: Updated [Coffee] module from 8.x-1.0-beta1 to 8.x-1.0-beta2
* Issue #2823511: Updated [Configuration Update Manager] module from 8.x-1.2
                  to 8.x-1.2
* Issue #2823513: Updated [Entity Browser] module from8.x-1.0-alpha9
                  to 8.x-1.0-alpha10
* Issue #2823514: Updated [bootstrap] theme from 8.x-3.0-rc2 to 8.x-3.0
* Updated the [ Feature: Default [Coffee] module testing permissions and
  configuration. ] Automated testing feature.
* Issue #2815017: Removed the [Composer Manager] module, no longer going to use
                  the Composer Manager in Varbase 8.4.x, We can update the
                  composer.json file manually to get all needed modules
                  and libraries.
* Issue #2824181: Updated [Metatag] module from 8.x-1.0-beta10
                  to 8.x-1.0-beta11
* Issue #2824188: Updated [Inline Entity Form] module from 8.x-1.0-alpha6
                  to 8.x-1.0-beta1

## 8.4.0-beta7
* Issue #2820894: Updated [entity_embed] module from 8.x-1.0-beta1 
                  to 8.x-1.0-beta2
* Issue #2820898: Updated [adminimal_theme] theme from 8.x-1.1 to 8.x-1.2
* Issue #2820902: Updated [layout_plugin] module from 8.x-1.0-alpha22
                  to 8.x-1.0-alpha23
* Issue #2821610: Updated [Varbase Editor] feature from varbase_editor 8.x-4.0
                  to varbase_editor 8.x-4.1
* Issue #2821881: Updated [Entityqueue] module with patches to have 
                  [Reverse order in admin view] option, and a fix for an issue
                  for the [Limit to a specific entity queue] in views
* Issue #2821881: Updated VarbaseContext :Added the step definition 
                  [ I should see :text value in the :selector input element ].
* Issue #2821881: Added the [ Feature: Functional Testing for the [entityqueue]
                  Module. ] and Updated the travis steps to enable entityqueue
                  module before the test.
* Issue #2821881: Updated the composer.json to have working patches in the
                  travis ci test. + Have a better testing features with
                  init-apply-cleanup parts.
* Issue #2822177: Added the [Entity browser enhanced] 8.1.0-beta1 module and
                  had it enabled by default

## 8.x-4.0-beta6
* Issue #2810289: Added the full VarbaseContext and had more working automated
                  testing gherkin features
* Issue #2815017: Added [sub composers] composer requirement from modules to the
                  varbase profile
* Issue #2815859: Have [Language] and [Content Translation] modules Enabled by
                  default and re-write features
* Issue #2816561: Updated Drupal from 8.2.0 to 8.2.1
* Issue #2817193: Updated [CKEditor Anchor Link] module to 8.x-1.2
* Issue #2818937: Updated [diff] module from 8.x-1.0-beta1 to 8.x-1.0-beta2
* Issue #2815353: Changed the [entityqueue] to
                  dev-8.x-1.x#1e33d7d90bea473718f8b17f358923e19c833cd5
                  to follow up with many fixes and patches

## 8.4.0-beta5
* Issue #2811505: Updated [block_class] module to 8.x-1.0-alpha1
* Issue #2811639: Updated Drupal from 8.1.10 to 8.2.0
* Issue #2812845: Changed patches for number of modules
* Issue #2813141: Updated [Varbase Editor] feature from 8.4.0-beta1 to 8.4.0
* Issue #2813327: Updated [CKEditor Anchor Link] module to 8.1.0
* Issue #2813833: Changed the Varbase tag to 8.x-4.0-beta5 in the
                  build-varbase.make
* Issue #2812865: PHP error while run drush command

## 8.4.0-beta4
* Issue #2807715: Fixed the issue of internal links are opening in new tabs by
                  having the [Exclude links with the same primary domain.] 
                  set to true.
* Issue #2810033: Updated [features] module to 8.x-3.0-rc1
* Issue #2810297: Updated [ds] module to 8.x-2.6
* Issue #2810053: Updated [panels] module to 8.3.0-beta5
* Issue #2810053: Updated [panels] module to 8.3.0-beta5 : Removed all paches to
                  check the issue of maga patch
* Issue #2810053: Added the patch file for Issue #2810533 : Advanced panels
                  8.x-3.x based on the work of Lightning profile
* Issue #2810053: Switched to the patch file for Issue #2810533 : Advanced
                  panels 8.x-3.x based on the work of Lightning profile :
                  panels--8-x-3-0-beta5---2810533-3.patch
* Issue #2810053: Switched to the patch file for Issue #2810533 : Advanced
                  panels 8.x-3.x based on the work of Lightning profile :
                  panels--8-x-3-0-beta5---2810533-10.patch

## 8.4.0-beta3
* Issue #2803073: Updated [Varbase user] feature: Removed the path module from
                  dependencies
* Issue #2804499: Added common fields storage (field_image, field_images )
* Issue #2804499: Added common fields storage (field_image, field_images ) for
                  taxonomy terms and block content.

## 8.4.0-beta2
* Issue #2804089: Updated [Varbase 8.x-4.x] profile : Updated Drupal to 8.1.10
* Issue #2802411: Add project diff and install with default install
* Issue #2802879: Updated varbase_editor feature to 8.x-4.0-beta1
* Issue #2802895: Updated [Varbase Page] and [Varbase landing]
* Issue #2802919: Have the Default site email noreply[at]vardot.com in the
                  install configure form.
* Issue #2802925: Added the [Varbase admin] feature: which manages
                  administration configurations
* Issue #2802977: Have WYSIWYG styles preview in admin theme
* Issue #2803013: Add and enable [Display Suite Switch View Mode] module
* Issue #2803039: Updated [Varbase 8.x-4.x] profile : Not to enable the [help]
                  module by default and remove the [poll] module
* Added default shortcut sets
* Issue #2803063: Updated [Varbase SEO] feature: removed some not needed modules
* Issue #2803073: Updated [Varbase user] feature: Updated permissions for user
                  roles
* Issue #2803115: Added the [entityqueue] module
* Issue #2803039: Enabled the [Help] module as the [adminimal_theme] admin
                  theme has unmet dependencies on it. and we want to use the
                  admin theme.
* Issue #2803073: Updated [Varbase user] feature: Updated list of config.
* Issue #2803143: Updated [Token] module to 8.x-1.0-beta2
* Issue #2803723: Fixed Mismatched entity and/or field definitions The following
                  changes were detected in the entity type and field
                  definitions. so that we do not have the issue after the
                  install, and if a contrib module had any change on a selected
                  entity.
* Issue #2803751: Updated [pathauto] module to 8.x-1.0-beta1
* Issue #2803979: Updated patches for [panelizer] and [Panels] modules
* Issue #2804043: Updated [Varbase site] feature: Added the homepage from Page
                  Manager with IPE
* Issue #2803073: Updated [Varbase user] feature: Removed the path module from
                  dependencies

## 8.4.0-beta1
* Issue #2801921: Updated varbase_editor feature to 8.x-4.0-alpha4, Removed the
                  support for codesnippit in the Rich editor.
* Issue #2802023: Updated [media_entity] module to 8.x-1.5

## 8.4.0-alpha13
* Issue #2796973 Removed the noreply@ override at the installation process.
* Issue #2797001 Configured extlink to Open external links in a new window.
* Issue #2797159 Updated the [features] module to 8.x-3.0-beta8
* Issue #2797077 Add "coffee" module to Varbase. And configure it to work
                 seamlessly
* Issue #2797189 Updated the [ctools] module to 8.x-3.0-alpha27
* Issue #2797077 Added the default config for the [coffee] module to use
                [admin, and tools] menus.
* Issue #2797077 Updated the [Varbase user] feature: Added all needed user
                 permissions for coffee to show up for selected user roles.
* Updated [Varbase Landing] feature : Fixed naming convention.
* Issue #2801921 Updated varbase_editor feature to 8.x-4.0-alpha2
* Issue #2801921 Updated [Varbase User] to have the list of permissions for user
                 to use the [varbase editor] 8.x-4.0-alpha2 feature.
* Updated the composer to use [modules/contrib/{}]
* Issue #2801921 Updated [Vartheme] theme to work well with the bootstrap
                 callout ckeditor styling for the [varbase editor]
                 8.x-4.0-alpha2 feature.
* Issue #2801935 Updated ctools and page manager
* Issue #2801921 Updated varbase_editor feature to 8.x-4.0-alpha3
* Issue #2801963 Updated [features] module to 8.x-3.0-beta9
* Issue #2801969 Updated Number of modules
* Issue #2801921 Have the codesnippet library with the profile.

## 8.4.0-alpha12
* Issue #2796897: Updated [Varbase 8.x-4.x] profile : Updated Drupal to
                  Drupal 8.1.9
* Issue #2796297: Updated [Varbase 8.x-4.x] profile: Added the poll module to
                  Varbase 8.x-4.x but it not enabled by default.
* Issue #2783821: Added the [Varbase SEO] feature: To provide SEO Core features
                  and settings.

## 8.4.0-alpha11
* Issue #2782475: Updated [Varbase 8.x-4.x] profile : Updated number of modules
* Issue #2782483: Updated [Varbase 8.x-4.x] profile : Moved enabling modules to
                  the profile settings, as enabling modules in features will
                  lock config to that feature only.

## 8.4.0-alpha10
* Updated [Varbase profile][8.x-4.x] : Updated Drupal to Drupal 8.18.
* Issue #2780225: Integrated Varbase [8.x-4.x] with travis-ci to use Drupal 8 
                  core Behat for Behavior and functional testing.

## 8.4.0-alpha9
* Updated [Varbase 8.x-4.x] profile : Changed the long name [Varbase: Drupal
  Bundled with Necessities | by Vardot] to [Varbase].
* Issue #2776677: Updated [Varbase 8.x-4.x] profile: Removed simple_sitemap
  module to use better D8 modules.
* Updated [Varbase 8.x-4.x] Profile: Moved Configurations to [Varbase Core]
  feature.
* Updated [Varbase Core][8.x-4.x] feature : Have all [Varbase profile][8.x-4.x]
  general config and added more modules for media entity, and bettered up the
  composer.json and the make file.
* Updated [Varbase profile][8.x-4.x] : Moved install configurations from the
  profile to [Varbase Core],[Varbase Landing],[Varbase page],[Varbase site],
  and [Varbase user] features.
* Updated [Varbase Core] Feature : Removed user config fron the feature as we
  do have them in the [Varbase user] feature.
* Updated the [Varbase][8.x-4.x] profile : Fixed the [views_infinite_scroll]
  location to be in config
* Updated [Varbase][8.x-4.x] Profile : Changed the locations of contrib modules
  and themes to be in [Varbase] profile, and fixed some formats
* Updated [Varbase page][8.x-4.x] feature : Added the settings to NOT Promoted
  to front page
* Updated [Varbase core] feature : Added the media token config.
* Updated [Varbase user] feature : Changed the label of the administrator role
  to [Super Admin].
* Updated [Varbase core] feature : Added the list of [Media bundles]
  { Document, Image, Video, and Audio }.
* Added the travis-ci configuration and [tests] with the first Varbase Testing
  Behat Gherkin feature.
* Removed [SET max_allowed_packet = 32M;] from travis.yml
* Updated the [Travis-CI] and phing build config files
* Updated [Varbase profile][8.x-4.x] : Changed the installer paths and the
  post install cmd.

## 8.4.0-alpha8
* Issue #2768707: Updated Drupal 8 for [Varbase 8.x-4.x] to Drupal 8.1.7 -
  a maintenance release which contains fixes for security vulnerabilities

## 8.4.0-alpha7
* Issue #2763559: Updated bootstrap theme to 8.x-3.0-rc1
* Issue #2763573: Updated the [features] module to 8.x-3.0-beta6
* Added the [Vartheme Subtheme (LESS)] subtheme starterkit
* Issue #2764585: Update of varbase by adding varbase_editor 8.x : Removed
                  [Text format] config from [Varbase] profile and [Varbase site]
                  feature. Added the [Varbase Editor] public contrib feature
                  to [Varbase] profile.

## 8.4.0-alpha6
* Issue #2758431 Fix composer requirements.
* Issue #2759841: Updated the [Varbase Page] Feature : Fixed the issue of
                 [Feature][Varbase Page] Body Field is disabled in the
                 [Manage form display] and users can not add the body of
                 the Basic page.
* Issue #2763547: Updated Drupal 8 to 8.1.5

## 8.4.0-alpha5
* Updated the [metatag] module from 8.x-1.0-beta4 to 8.x-1.0-beta9.
* Removed not needed config from the profile as they moved to features.
* Added the [varbase core] feature : which Provides core components required by
  other features.
* Added the [Varbase page] feature : Provides Basic page content type and
  related configuration
* Added the [Varbase Landing] feature : which manages Landing page content
  type and related configurations.
* Added the [Varbase Site] feature : which Provides site components.
* Added the [Varbase User] feature : which Provide User related configuration.
* Added Varbase features for Varbase core functionality, and Varbase site
  functionality.
* Removed not needed block placement for the vartheme theme
* Updated the [Varbase page] feature : Removed not needed init config as they
  had some issues when we install.

## 8.4.0-alpha4
* Removed [article] content type and all its configs.
* Added the starting points for the [Vartheme] the Base theme for Vardot standard websites. Based on Bootstrap 3 and less css.
* Removed config for [Comment] and [Contact] core modules.
* Added to be enabled the [page_manager_ui], [features_ui], [ctools_views], [update] modules
* Added the patch for [2672110 - EntityFieldDeriver naive about field info, throws PHP warnings] when we install

## 8.4.0-alpha3
* Issue #2755859: Remove Flixslider and flixslider views and have the list of dependencies enabled modules
* Issue #2755867: Added patches for number of modules
* Issue #2755867: Removed errored patches.
* Issue #2755875: Added the [layout_plugin] and [bootstrap_layouts] modules and enabled them

## 8.4.0-alpha2
* Issue #2752685: Update the version of Drupal 8 to 8.1.3
* Issue #2752719: Have a build varbase make file
* Issue #2755795: Have the list of Drupal 8 needed modules and themes in
                  Varbase 8.x-4.x
* Issue #2755793: Added composer.json with
                 needed modules and themes to distribution v8.x
* Issue #2755851: Updated the list of modules in the composer and the make file
                  as Seems that some modules have changed.
