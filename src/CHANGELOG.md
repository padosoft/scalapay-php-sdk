# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [3.3.7] - 2026-05-27
### Changed
- Repackages the SDK under the `padosoft/scalapay-php-sdk` Composer vendor.
- Documents this package as a Padosoft-maintained clone of the unmaintained upstream package.
- Declares support for PHP versions from 5.6 up to 8.5.

## [3.3.6] - 2025-09-29
### Added
- [SECLEV-68] - Adds exception code for order not found

## [3.3.5] - 2024-04-03
### Fixed
- [SP-15535] - Fixes curl_error check on Curl service

## [3.3.4] - 2024-03-27
### Added
- [SP-15190] - Adds "amount" optional field in capture call.

## [3.3.3] - 2024-01-29
### Fixed
- [IN-4856] - Adds Risk object documentation on README.md file

## [3.3.2] - 2024-01-04
### Changed
- [IN-4810] - Deprecates date field in Travel object
- [IN-4810] - Adds startDate and endDate fields in the Travel object
### Fixed
- [IN-4810] - Adds ENUM validation on preferredLanguage in the Notification object
- [IN-4810] - Improves exception message generation logic.
- [IN-4810] - Adjusts PHPDocs
- [IN-4810] - Updates the README.md file

## [3.3.1] - 2023-12-06
### Fixed
- [IN-4779] - Reverts amount values casting
- [IN-4779] - Solves Merchant Reference issue on Capture API

## [3.3.0] - 2023-12-04
### Changed
- [IN-4714] - Cast money amount to float or int
- [IN-4714] - Cast order refund values
### Fixed
- [IN-4714] - Adjusts CHANGELOG.md file

## [3.2.1] - 2023-11-21
### Added
- [IN-4736] - Supports merchant reference key on capture call

## [3.2.0] - 2023-11-08
### Added
- [IN-4612] - Adds 'orderCountL180d' key on Extensions Risk object

## [3.1.1] - 2023-10-18
### Fixed
- [IN-4629] - PHPDocs adjustments

## [3.1.0] - 2023-10-10
## [3.1.0] - 2023-10-10
### Changed
- [IN-4615] - Removes Client object as requested parameter in API methods
- [IN-4615] - Improves toArray() recursion
- [IN-4615] - Updates README.mdn
### Added
- [IN-4615] - Implements getPaymentInfo() API
- [IN-4615] - Implements getMerchantConfiguration() API

## [3.0.0] - 2023-09-26
### Changed
- [IN-4540] - Implements Extensions
- [IN-4540] - Structural refactor
- [IN-4540] - Improves createOrder and toArray methods
- [IN-4540] - Removes empty arrays when toArray method is used
### Fixed
- [IN-4540] - Obfuscates secret key in exceptions

## [2.0.1] - 2023-09-04
### Added
- [IN-4307] - New Packagist repo
### Removed
- [IN-4307] - Composer lock

## [2.0.0] - 2023-08-31
### Added
- [IN-4307] - Replaces Guzzle with curl and refactor API core
### Removed
- [IN-4307] - Removed Guzzle
