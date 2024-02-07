// Nested Defaults: Destructured and Restructured

const defaults = {
    options: {
        remove: true, enable: false, instance: {},
    },
    log: {
        warn: true,
        error: true,
    },
};

let config = {
    options: {
        remove: false,
        instance: null,
    },
};

// use object destructuring with defaults to override config options to defaults options

// Step 1: use object destructuring to prevent if else checking such as:

// config.options = config.options || {};
// config.options.remove = (config.options.remove !== undefined) ?
// config.options.remove : defaults.options.remove; config.options.enable
// = (config.options.enable !== undefined) ?
//         config.options.enable : defaults.options.enable;
//     ...

const {
    // destructure (with default value assignments)
    options: {
        remove = defaults.options.remove,
        enable = defaults.options.enable,
        instance = defaults.options.instance,
    } = {},
    log: {
        warn = defaults.log.warn,
        error = defaults.log.error,
    } = {},
} = config;

config = {
    options: { remove, enable, instance },
    log: { warn, error },
};

console.log(config);
