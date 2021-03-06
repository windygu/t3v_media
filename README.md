[T3v Media]
===========

[![Travis CI Status][Travis CI Status]][Travis CI]

**The media extension of TYPO3Voila.**

Dependencies
------------

* TYPO3 CMS 8.7 or greater
* T3v Core extension
* T3v Content extension

Installation
------------

1. Add T3v Media as dependency to the [Composer] configuration
2. Run `composer install` or `composer update` to install all dependencies with Composer
3. Include the TypoScript for T3v Media

Integrations
------------

* [Youku] integration

Development
-----------

### Setup

```
$ ./Scripts/Setup.sh
```

### Run Unit Tests

```
$ ./Scripts/Tests/Unit.sh
```

### Run Functional Tests

```
$ ./Scripts/Tests/Functional.sh
```

Bug Reports
-----------

GitHub Issues are used for managing bug reports and feature requests. If you run into issues, please search the issues
and submit new problems [here].

Versioning
----------

This library aims to adhere to [Semantic Versioning 2.0.0]. Violations of this scheme should be reported as bugs.
Specifically, if a minor or patch version is released that breaks backward compatibility, that version should be
immediately yanked and / or a new version should be immediately released that restores compatibility.

License
-------

T3v Media is released under the [MIT License (MIT)], see [LICENSE].

[Acceptance testing TYPO3]: https://wiki.typo3.org/Acceptance_testing "Acceptance testing TYPO3"
[Automated testing TYPO3]: https://wiki.typo3.org/Automated_testing "Automated testing TYPO3"
[Composer]: https://getcomposer.org "Dependency Manager for PHP"
[Functional testing TYPO3]: https://wiki.typo3.org/Functional_testing "Functional testing TYPO3"
[here]: https://github.com/t3v/t3v_media/issues "GitHub Issue Tracker"
[LICENSE]: https://raw.githubusercontent.com/t3v/t3v_media/master/LICENSE "License"
[MIT License (MIT)]: http://opensource.org/licenses/MIT "The MIT License (MIT)"
[Semantic Versioning 2.0.0]: http://semver.org "Semantic Versioning 2.0.0"
[T3v Media]: https://t3v.github.io/t3v_media/ "The media extension of TYPO3Voila."
[Travis CI]: https://travis-ci.org/t3v/t3v_media "T3v Media at Travis CI"
[Travis CI Status]: https://img.shields.io/travis/t3v/t3v_media.svg?style=flat "Travis CI Status"
[TYPO3voila]: https://github.com/t3v "“UH LÁLÁ, TYPO3!”"
[Unit Testing TYPO3]: https://wiki.typo3.org/Unit_Testing_TYPO3 "Unit testing TYPO3"
[Youku]: https://www.youku.com "Youku"
