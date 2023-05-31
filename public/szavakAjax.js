class MyAjax {
    constructor(token) {
        this.token = token;
    }

    
    getAjax(apiEndPoint, array, myCallback) {
        array.splice(0, array.length);
        $.ajax({
            url: apiEndPoint,
            type: "GET", 
            success: function (result) {
                result.forEach(function (element) {
                    array.push(element); 
                });                     
                myCallback(array); 
            },
        });
        console.log("GET OK");
    }

    postAjax(apiEndPoint, newData) {
        newData._token = this.token;
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token },
            url: apiEndPoint,
            type: "POST",
            data: newData,
            success: function (result) {
                console.log("POST success");
            },            
        });
    

    }

    deleteAjax(apiEndPoint, id) {
        $.ajax({
            headers: { "X-CSRF-TOKEN": this.token },
            url: apiEndPoint + "/" + id,
            type: "DELETE",
            success: function (result) {
                console.log("DEL success");
            },            
        });
    }
}