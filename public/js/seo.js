window.onload = () => {

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

    let seoTitleLink = document.getElementById("seo-title");
    let urlInput = document.getElementById("url");

    titleChars.innerText = this.countCharsWithOutSpaces(titleInput.value);
    if (titleInput.value !== '') {
        seoTitleLink.href = urlInput.value;
        seoTitleLink.innerText = titleInput.value;
    } else {
        seoTitleLink.href = '';
        seoTitleLink.innerText = 'Título de ejemplo';
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

    let seoDesc = document.getElementById("seo-desc");
    if (descriptionInput.value !== '') {
        seoDesc.innerText = descriptionInput.value;
    } else {
        seoDesc.innerText = 'Esta es una descripción de ejemplo de como se vería en Google';
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
    let seoTitleLink = document.getElementById("seo-title");
    let urlInput = document.getElementById("url");
    let seoUrl = document.getElementById("seo-url");

    if (urlInput.value !== '') {
        seoTitleLink.href = urlInput.value;
        seoUrl.innerText = urlInput.value;
    } else {
        seoTitleLink.href = '';
        seoUrl.innerText = 'www.ejemplo.com';
    }
}

function seeInGoogle() {
    const googleTemplate = document.querySelector(".headerSearch");
    const y = googleTemplate.getBoundingClientRect().top + window.pageYOffset - 230;

    window.scrollTo({top: y, behavior: 'smooth'});
}
