function OnChangeApi() {
    var PlayFabApi = document.getElementById("PlayFabApi");
    var ApiMethodList = document.getElementById("ApiMethod");
    
    while (ApiMethodList.firstChild)
        ApiMethodList.removeChild(ApiMethodList.firstChild);
    GetApiMethods(PlayFabApi.value, ApiMethodList);
}
$(document).ready(OnChangeApi);

function GetApiMethods(PlayFabApi, ApiMethodList) {
    var JsonResponse = document.getElementById("JsonResponse");
    JsonResponse.value = "Waiting for api list...";

    var request = {
        PlayFabApi: PlayFabApi
    };
    
    $.ajax({
        type: "POST",
        url: "getApiList.php",
        data: request,
        success:function(response) {
            var objResponse = JSON.parse(response);
            JsonResponse.value += "\n\n" + typeof(objResponse) + ": " + objResponse;
            for (var i = 0; i < objResponse.apiList.length; i++)
                AppendDropdownOption(ApiMethodList, objResponse.apiList[i]);
            JsonResponse.value = "(response json will display here)";
        }
    });
}

function SetApiMethods(response) {
}

function AppendDropdownOption(parent, name) {
    var newOption = document.createElement("option");
    newOption.value = name;
    newOption.text = name;
    parent.appendChild(newOption);
}

function CallApi() {
    var TitleId = document.getElementById("TitleId").value;
    var ClientSessionToken = document.getElementById("ClientSessionToken").value;
    var DevSecretKey = document.getElementById("DevSecretKey").value;
    var PlayFabApi = document.getElementById("PlayFabApi").value;
    var ApiMethod = document.getElementById("ApiMethod").value;
    var JsonRequest = document.getElementById("JsonRequest").value;
    var JsonResponse = document.getElementById("JsonResponse");
    
    JsonResponse.value = "Waiting for response...";

    var request = {
        TitleId: TitleId,
        PlayFabApi: PlayFabApi,
        ApiMethod: ApiMethod,
        JsonRequest: JsonRequest
    };
    
    if (PlayFabApi === "Client" && ClientSessionToken)
        request.ClientSessionToken = ClientSessionToken;
    if (PlayFabApi !== "Client" && DevSecretKey)
        request.DevSecretKey = DevSecretKey;
    
    $.ajax({
        type: "POST",
        url: "ajaxPlayFabApi.php",
        data: request,
        success:function(response) {
            JsonResponse.value = response;
            CustomHandlers(response);
        }
    });
}

function CustomHandlers(apiResponseString) {
    var objResponse = JSON.parse(apiResponseString);
    if (objResponse && objResponse.data && objResponse.data.SessionTicket) {
        document.getElementById("ClientSessionToken").value = objResponse.data.SessionTicket;
    }
}
