export class Utilities {
  static async sendRequest(url = "", methodParam = "GET", bodyParam = "") {
    const configRequest = {
      headers: {
        Accept: "application/json",
        "Content-Type": "application/json"
      }
    };

    if (methodParam === "POST") {
      configRequest.method = methodParam;
      configRequest.body = bodyParam;
    }

    let response = await fetch(
      `https://api.artikunazo.mx/api/${url}`,
      //`http://localhost:8000/api/${url}`,
      configRequest
    );
    return await response.json();
  }
}
