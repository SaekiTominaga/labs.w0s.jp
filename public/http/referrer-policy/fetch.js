fetch('fetch.txt', {
    method: 'HEAD'
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_.txt', {
    method: 'HEAD',
    referrerPolicy: ''
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_no-referrer.txt', {
    method: 'HEAD',
    referrerPolicy: 'no-referrer'
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_no-referrer-when-downgrade.txt', {
    method: 'HEAD',
    referrerPolicy: 'no-referrer-when-downgrade'
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_same-origin.txt', {
    method: 'HEAD',
    referrerPolicy: 'same-origin'
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_origin.txt', {
    method: 'HEAD',
    referrerPolicy: 'origin'
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_strict-origin.txt', {
    method: 'HEAD',
    referrerPolicy: 'strict-origin'
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_origin-when-cross-origin.txt', {
    method: 'HEAD',
    referrerPolicy: 'origin-when-cross-origin'
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_strict-origin-when-cross-origin.txt', {
    method: 'HEAD',
    referrerPolicy: 'strict-origin-when-cross-origin'
}).catch((error) => {
    console.error(error.message);
});

fetch('fetch_unsafe-url.txt', {
    method: 'HEAD',
    referrerPolicy: 'unsafe-url'
}).catch((error) => {
    console.error(error.message);
});
