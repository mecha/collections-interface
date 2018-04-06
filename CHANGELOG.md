# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [[*next-version*]] - YYYY-MM-DD
### Changed
- `SetInterface` no longer extends `HasCapableInterface`, but extends new `HasItemCapableInterface`
- `MapInterface` no longer extends `SetInterface`, but is still traversable.

### Added 
- `HasItemCapableInterface`.
- `AddCapableInterface`.
- `AddCapableSetInterface`.
- `MapCapableInterface`.

## [0.2-alpha1] - 2018-04-06
Initial version.
