# AckProcessor

AckProcessor is a [swarrot](https://github.com/swarrot/swarrot) processor.
Its goal is to ack (or NACK) messages when needed.

## Installation

The recommended way to install AckProcessor is through
[Composer](http://getcomposer.org/). Require the `swarrot/ack-processor` package
into your `composer.json` file:

```json
{
    "require": {
        "swarrot/ack-processor": "@stable"
    }
}
```

**Protip:** you should browse the
[`swarrot/ack-processor`](https://packagist.org/packages/swarrot/ack-processor)
page to choose a stable version to use, avoid the `@stable` meta constraint.

## Usage

See [swarrot documentation](https://github.com/swarrot/swarrot).

## Configuration

|Key             |Default|Description                                            |
|:--------------:|:-----:|-------------------------------------------------------|
|requeue_on_error|false  |If true, the message will be requeued in the same queue|

## License

AckProcessor is released under the MIT License. See the bundled LICENSE file for details.
