<?php
namespace Craft;

//Some asset source helper classes are in lib, and are not bootstrapped in the console
foreach (glob(CRAFT_APP_PATH . 'lib/*.php') as $file) {
    require_once($file);
}

class PostDeployCommand extends BaseCommand
{
    public function actionClearTemplateCache() {
        $cleared = craft()->templateCache->deleteAllCaches() ? 'success' : 'failure';
        OnePostDeployPlugin::log("Attempting to clear template caches: {$cleared}", LogLevel::Info);
    }
}
