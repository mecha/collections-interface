# Dhii - Collections Interface

[![Build Status](https://travis-ci.org/dhii/collections-interface.svg?branch=master)](https://travis-ci.org/dhii/collections-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/collections-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/collections-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/collections-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/collections-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/collections-interface/version)](https://packagist.org/packages/dhii/collections-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

A highly [ISP][ISP]-compliant collection of interfaces that represent collections.

## Interfaces
- [`CountableListInterface`][CountableListInterface]: A list that can be iterated and counted.
- [`SetInterface`][SetInterface]: A list that can be iterated and checked for a key.
- [`CountableSetInterface`][CountableSetInterface]: A set that can be counted.
- [`MapInterface`][MapInterface]: An readable set.
- [`CountableMapInterface`][CountableMapInterface]: An readable countable set.

[Dhii]: https://github.com/Dhii/dhii
[ISP]: https://en.wikipedia.org/wiki/Interface_segregation_principle

[CountableListInterface]:                           src/CountableListInterface.php
[SetInterface]:                                     src/SetInterface.php
[CountableSetInterface]:                            src/CountableSetInterface.php
[MapInterface]:                                     src/MapInterface.php
[CountableMapInterface]:                            src/CountableMapInterface.php
