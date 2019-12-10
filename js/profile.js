const editButtons = document.querySelectorAll('.button-edit');
const saveButtons = document.querySelectorAll('.button-save');

editButtons.forEach(editButton => {
    editButton.addEventListener('click', function(){
        event.preventDefault();
        const buttonLabel = editButton.parentElement;

        buttonLabel.querySelector('input').focus();

        buttonLabel.querySelector('.button-save').classList.remove('hide-button');
        buttonLabel.querySelector('.button-edit').classList.add('hide-button');

        buttonLabel.querySelector('.button-save').addEventListener('click', function(){
            event.preventDefault();
            
            let inputName = querySelector('#cName').value;
            let inputLastName = querySelector('#cSurname').value;
            let inputEmail = querySelector('#cEmail').value;
            let inputAddress = querySelector('#cAddress').value;
            let inputPhoneNo = querySelector('#cPhoneNo').value;
            let inputCity = querySelector('#nCityID').value;

            let formData = new formData();
            formData.append('inputName', inputName);
            formData.append('inputLastName', inputLastName);
            formData.append('inputEmail', inputEmail);
            formData.append('inputAddress', inputAddress);
            formData.append('inputPhone', inputPhoneNo);
            formData.append('cityInput', inputCity);

            // let endpoint = "api/api-update-profile.php";

    // fetch(endpoint, {
    //     method: "POST",
    //     body: formData
    // })
    // .then(res => res.text())
    // .then(response => {
    //   console.log(response);
    //   if (response == 1) {
    //     // location.href = "profile.php";
    //   }
    //   if (response == 0) {
    //     document.querySelector("#emailDiv").textContent =
    //       "User with this email or user name is not found";
    //     document.querySelector("#emailDiv").style.maxHeight = "500px";
    //   }
    // });


    
    


        });
        
    });
});

const deleteSubscriptionBtn = document.querySelectorAll(".product-info-container .button-delete");
deleteSubscriptionBtn.forEach(deleteBtn=>{
    deleteBtn.addEventListener("click", function(){
        let userSubscriptionID = deleteBtn.parentElement.id.substr(deleteBtn.parentElement.id.search("-")+1,deleteBtn.parentElement.id.length)
        deleteSubscription(userSubscriptionID)
    })
    
})
function deleteSubscription(id){
     // console.log('delte')
        let endpoint = "api/api-delete-subscription.php"
        let formData = new FormData();
        formData.append('userSubscriptionID',id)
        fetch(endpoint, {
            method: "POST",
            body: formData
        })
        .then(res => res.text())
        .then(response => {
            console.log(response);
        });

}

document.querySelector(".delete-profile-button").addEventListener("click", deleteUser);
document.querySelector(".log-out").addEventListener("click", logout);

function deleteUser(){
    let endpoint = "api/api-delete-user.php";
    // console.log("delte user");
        fetch(endpoint, {
            method: "POST"
        })
        .then(res => res.text())
        .then(response => {
            console.log(response);
            if(response==1);
            window.location.href = "index.php";
        });
}

let deleteCardBtns = document.querySelectorAll(".button-delete-card")
deleteCardBtns.forEach(deleteBtn=>{
    deleteBtn.addEventListener("click", function(){
        let id = deleteBtn.parentElement.id.substr(deleteBtn.parentElement.id.search("-")+1,deleteBtn.parentElement.id.length)
        deleteCreditCard(id);
    })
})
function deleteCreditCard(id){
    let formData = new FormData();
    formData.append('nCreditCardID', id);
    let endpoint = "api/api-delete-card.php";
    // console.log("delte user");
        fetch(endpoint, {
            body: formData,
            method: "POST"
        })
        .then(res => res.text())
        .then(response => {
            document.getElementById("creditcard-"+id).remove();
        });
}
function logout(){
    let endpoint = "api/api-logout.php";
    // console.log("delte user");
        fetch(endpoint, {
            method: "POST"
        })
        .then(res => res.text())
        .then(response => {
            window.location.href = "index.php";
        });
}