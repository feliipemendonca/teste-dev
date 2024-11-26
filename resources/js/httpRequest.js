function getRequest(url, parameters) {
    return new Promise((resolver, reject) => {
        $.ajax({
            url: url,
            data: parameters,
            dataType: "json",
            success: (response) => {
                resolver(response);
            },
            error: (error) => {
                reject(error);
            },
        });
    });
}

export default {
    getRequest,
};
