## GitHub Org Inviter
This allows anyone to visit the URL and be added to a (hopefully read-only) team. Uses PHP 7 and Redis/Memcached.

### Environment Variables
* `GITHUB_CLIENT_ID` - Your GitHub applications's client ID.
* `GITHUB_CLIENT_SECRET` - Your GitHub application's client secret.
* `GITHUB_USER_TOKEN` - A personal access token with the `admin:org` permission.
* `GITHUB_TEAM` - The ID of the team people should be added to.
* `GITHUB_CALLBACK` - The callback URL to redirect from GitHub to.
