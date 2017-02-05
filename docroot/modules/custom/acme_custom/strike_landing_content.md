This Page is an example post-installation path on a site that has extended Lightning.

Using the `lightning.extender.yml` file provided with Lightning, the following has taken place post-installation of Lightning:

* The Strike Custom module has been enabled which:
  * Sets a new theme
  * Deletes the content types that ship with Lightning
* The Features module has been enabled and the following Features have been enabled:
  * Lightning Settings: Disables Lightning's auto-creation of roles
  * Theme Settings: Defines some settings for the Strike theme
* You have been redirected to this custom page

The `lightning.extender.yml` file ships with Lightning. To use it, copy it to your `sites/default` or `sites/SITE_NAME` directory and customize it to your needs. The `lightning.extender.yml` file used in this example is duplicated below:

```
# Defines additional tasks for Lightning to perform during and after site
# installation.

# List of additional modules to enable after Lightning is installed.
modules:
  - features
  - features_ui
  - strike_custom
  - strike_theme_settings
  - strike_lightning_settings

# A system path to redirect to once installation is complete.
redirect:
  path: /strike-install-complete

  # Optional query string parameters.
  query: { }
```
