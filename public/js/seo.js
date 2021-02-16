window.onload = () => {
    if (fromSearchers) {
        this.goToSeo();
    }
}

function goToSeo() {
    const seoInput = document.getElementById("seo-input");
    const y = seoInput.getBoundingClientRect().top + window.pageYOffset - 80;
    document.getElementById('title').focus();

    window.scrollTo({top: y, behavior: 'smooth'});
}

function countCharsWithOutSpaces(str) {
    str = str.replace(/(^\s*)|(\s*$)/gi, "");
    str = str.replace(/[ ]{2,}/gi, " ");
    str = str.replace(/\n/g, " ");
    str = str.replace(/\n /, "\n");
    str = str.split(' ')
        .filter(function (n) {
            return n != ''
        });
    str = str.join();
    str = str.replaceAll(',', '');
    return str.length.toString();
}

function titleChanged() {
    const titleInput = document.getElementById("title");
    let titleChars = document.getElementById("titleChars");

    let seoTitleLinks = document.querySelectorAll('#seo-title')
    let urlInput = document.getElementById("url");

    titleChars.innerText = this.countCharsWithOutSpaces(titleInput.value);
    if (titleInput.value !== '') {
        seoTitleLinks.forEach( title => {
            title.href = urlInput.value;
            title.innerText = titleInput.value;
        })
    } else {
        seoTitleLinks.forEach( title => {
            title.href = '';
            title.innerText = 'Título de ejemplo';
        })
    }
}

function returnTitleCharsValue() {
    const titleInput = document.getElementById("title");
    if (titleInput.value === '') {
        let titleChars = document.getElementById("titleChars");
        titleChars.innerText = '70';
    }
}

function descChanged() {
    const descriptionInput = document.getElementById("description");
    let descriptionChars = document.getElementById("descriptionChars");

    descriptionChars.innerText = this.countCharsWithOutSpaces(descriptionInput.value);

    let seoDescriptions = document.querySelectorAll("#seo-desc");

    if (descriptionInput.value !== '') {
        seoDescriptions.forEach(seoDesc => {
            seoDesc.innerText = descriptionInput.value;
        })
    } else {
        seoDescriptions.forEach(seoDesc => {
            seoDesc.innerText = 'Esta es una descripción de ejemplo de como se vería en Google';
        })
    }
}

function returnDescCharsValue() {
    const descriptionInput = document.getElementById("description");
    if (descriptionInput.value === '') {
        let descriptionChars = document.getElementById("descriptionChars");
        descriptionChars.innerText = '156';
    }
}

function urlChanged() {
    let seoTitleLinks = document.querySelectorAll("#seo-title");
    let urlInput = document.getElementById("url");
    let seoUrls = document.querySelectorAll("#seo-url");

    if (urlInput.value !== '') {
        seoTitleLinks.forEach(seoTitleLink => {
            seoTitleLink.href = urlInput.value;
        })
        seoUrls.forEach(seoUrl => {
            seoUrl.innerText = urlInput.value;
        })
    } else {
        seoTitleLinks.forEach(seoTitleLink => {
            seoTitleLink.href = '';
        })
        seoUrls.forEach(seoUrl => {
            seoUrl.innerText = 'www.ejemplo.com';
        })
    }
}

function seeInGoogle() {
    const googleTemplate = document.querySelector(".headerSearch");
    const y = googleTemplate.getBoundingClientRect().top + window.pageYOffset - 230;

    window.scrollTo({top: y, behavior: 'smooth'});
}
