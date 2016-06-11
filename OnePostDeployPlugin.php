<?php
namespace Craft;


class OnePostDeployPlugin extends BasePlugin
{
    public function getName() {
        return Craft::t('Post Deployment');
    }

    public function getVersion() {
        return '1.0';
    }

    public function getDeveloper() {
        return 'One Design Company';
    }

    public function getDeveloperUrl() {
        return 'https://www.onedesigncompany.com';
    }
}
