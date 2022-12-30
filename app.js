const cookieStorage = {
    getItem: (item) => {
        const cookies = document.cookie
            .split(':')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({ ...acc, [key.trim()]: value}),{});
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value}`
    },
};

const storageType = cookieStorage;
const consentPropertyName = 'jdc_consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    const consentPopup = document.getElementById('consent-popup');
    const accept8tn = document.getElementById('accept');

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.classList.add('hidden');
    };

    accept8tn.addEventListener('click', acceptFn);

    if (shouldShowPopup(storageType)){
        setTimeout(() => {
            consentPopup.classList.remove('hidden');
        }, 2000);
    }
};