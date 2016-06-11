## One Post Deployment Plugin for Craft

The One Post Deployment plugin holds common Craft CMS console commands that can be run in post-deploy hooks.

### Running the Commands

You can run a post-deploy command by adding the following to a git hook or crontab:

```
php ./craft/app/etc/console/yiic postdeploy clearTemplateCache
```

The commands will also output any success or failure messages.
