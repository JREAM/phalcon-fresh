[![Build Status](https://travis-ci.org/JREAM/phalcon-fresh.svg)](https://travis-ci.org/JREAM/phalcon-fresh)

# Phalcon Fresh

This is a **CLI** application to complement the dev tools.

- This applies to the [Phalcon](http://phalconphp.com/en/) Framework.
- Applications are based on the working examples provided at [Phalcon MVC](https://github.com/phalcon/mvc).

## Index

- [Status](#status)
- [Requirements](#requirements)
- [How it Works](#how-it-works)
- [System Structure](#system-structure)
- [Contributors](#contributors)
- [Special Thanks](#special-thanks)

## Status

- **Unstable** - In Development
- Contribute if you like and do a pull request.

## Requirements
- PHP 5.4+
- PHP `phalcon.so` extension and activated _(1.3+)_

## How it Works
This application runs from a terminal. Simply try the following
to see a list of commands from the `phalcon-fresh` folder:

    $ php app/cli.php

You will get a list of commands. The rest is very straight forward,
to run a command you could create an hmvc app called `firefly` by typing:

    $ php app/cli.php hmvc create firefly

## System Structure
Keep in mind **this is in development** and just started. Improvements will come along.

- **/app** - Contains all of the application to build
    - **/config** - Contains version, Save Path, Tasks, and command list.
    - **/tasks** - These are all the Phalcon CLI Tasks. The AbstractTask does most of the work.
    - **/template** - This contains templates for the task you call
- **/output** - This is the current output folder right now for testing, in reality it would be a real app folder.

There are currently two replaceable placeholders `%app%` and `%namespace%`. Sometimes
namespace won't apply depending on what you create.

@todo: Take the user input as-is, or force strtolower() and ucwords()? What if it's multi-named eg: UserDashboard,
if I do it automatically it would be `userdashboard` with a namespace of `Userdashboard`.

## Contributors

- Jesse Boyer ([GitHub](http://github.com/JREAM), [Website](http://jream.com))
- You are welcome to contribute!

## Special Thanks

Credit is always due to the awesome authors of [Phalcon](http://phalconphp.com/en/). So a special thanks goes out to the developers and contributors.
