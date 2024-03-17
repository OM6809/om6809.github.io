const form = document.querySelector('#form-group mt-2');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    db.collection('sites').add({
        name: form.name.value,
        email: form.email.value,
        phone: form.phone.value,
        enquiry: form.enquiry.value,
        source: form.source.value,
        news: form.news.value,
        message: form.message.value,
    })
    .then(() => {
        form.reset();
        console.log("Message sent successfully!");
    })
    .catch((error) => {
        console.error("Error sending message: ", error);
    });
});
