<?php
namespace Installer\Composer;

class RbsChangeInstaller extends \Composer\Installer\LibraryInstaller
{
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(\Composer\Package\PackageInterface $package)
    {
        $prefix = substr($package->getPrettyName(), 0, 23);
        switch($package->getPrettyName())
        {
        	case 'rbschange-core':
        		return $package->getPrettyName();
        	case 'rbschange-module':
        		return 'App/Modules/' . $package->getPrettyName();
        	case 'rbschange-framework':
        		return $package->getPrettyName();
        	case 'rbschange-lib':
        		return 'libs/' . $package->getPrettyName();
        	case 'rbschange-compatibilitymodule':
        		return 'modules/' . $package->getPrettyName();        		        		
        }
        return $package->getPrettyName();
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
    	return in_array($packageType, 'rbschange-core', 'rbschange-module', 'rbschange-framework', 'rbschange-lib', 'rbschange-compatibilitymodule');
    }
}