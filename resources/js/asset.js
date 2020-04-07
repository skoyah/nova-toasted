let config = Nova.config.toastedConfig;

if (config) {
    Object.assign(Nova.bus.$toasted.options, config);

    config.toasts.forEach((toast) => {
        Object.assign(
            (Nova.bus.$toasted[toast.name] = (message, options) => {
                options = options || toast.options || {};
                message = message || toast.message;
                return Nova.bus.$toasted.show(message, options);
            })
        );
    });
}
