const button = document.querySelector('button');

button.addEventListener('click', () => {
    Notification.requestPermission().then((perm) => {
        // if (perm === 'granted') {
        const notification = new Notification('Example notification', {
            body: 'hello world',
            data: { hello: 'world' },
            icon: 'https://blog.hubspot.com/hubfs/image8-2.jpg',
            tag: 'welcome-message',
        });

        notification.addEventListener('close', (e) => {
            console.log('🚀 ~ file: script.js ~ line 14 ~ notification.addEventListener ~ e', e);
        });

        notification.addEventListener('error', (e) => {
            alert('Error');
        });
        // }
    });
});

// This notification pop up if user navigate to another tab in browser
let notification;
let interval;

document.addEventListener('visibilitychange', () => {
    if (document.visibilityState === 'hidden') {
        const leaveDate = new Date();

        interval = setInterval(() => {
            notification = new Notification('Come back later', {
                body: `See you soon - ${Math.round((new Date() - leaveDate) / 1000)} seconds`,
                icon: 'https://blog.hubspot.com/hubfs/image8-2.jpg',
                tag: 'come back later',
            });
        }, 1000);
        console.log('🚀 ~ file: script.js ~ line 32 ~ document.addEventListener ~ notification', notification);
    } else {
        if (interval) {
            clearInterval(interval);
        }
        notification.close();
    }
});
