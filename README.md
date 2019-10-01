# How To Share Livewire Components


I had a project that required me to share a set of a dozen or so Livewire components among a dozen or so Laravel
 sites. So I created a package to provide the components. This demo package shows basically how I did it.

## 

If you want you can install the package via composer:

```bash
composer require edgrosvenor/shareable-livewire
```
But I'm not putting this in Packagist, so either use GitHub as a repository or clone / download the package and use a
 path repsotory.

The magic all happens in the [service provider](https://github.com/edgrosvenor/shareable-livewire/blob/master/src
/ShareableLivewireServiceProvider.php). Basically you just create the aliases for your components in the boot
() method. 