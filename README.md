

# free-email-provider-check
This small library is designed to check emails for membership in free email services. It may be useful for verifying that an email belongs to a corporate domain.

Thanks for the list https://gist.github.com/tbrianjones/5992856/

You can use either the provided list of domain names or add it with other domain names

The library allows you to work with both a text file containing a list of domain names and an array. 
You can always expand the possibilities by implementing the interface `valentinbv\Interfaces\ISource`

For example, use a file:

    $fileSource = new valentinbv\Email\FileSource(__DIR__ . '/domains.txt');
    $fileSource->find('yahoo.com');

or use an array

    $arraySource = new valentinbv\Email\ArraySource(['yahoo.com']);
    $arraySource->find('yahoo.com');
    
For intstall from packagist

**composer require valentinbv/free-email-provider-check**

For install from git add to composer.json:

    {
        "repositories": [
            {
                "type": "vcs",
                "url": "https://github.com/ValentinBV/free-email-provider-check.git"
            }
        ],
        "require": {
            "valentinbv/free-email-provider-check": "dev-master"
        }
    }
