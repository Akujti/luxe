function axiosInc(urlPath, method = 'get', data = null) {

    var addExtraOData = '';

    if(urlPath == 'Property') {
        addExtraOData = 'OData'
    }

    var url = `${cmaApiCredentials.apiLink}${addExtraOData}${cmaApiCredentials.dataset}/${urlPath}?access_token=${cmaApiCredentials.serverToken}`;
    return axios[method](url, { params: data});
}