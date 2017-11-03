export const makeQuery = (params) =>
  Object
    .keys(params)
    .map(k => {
      if (Array.isArray(params[k])) {
        return params[k]
          .map(val => `${encodeURIComponent(k)}[]=${encodeURIComponent(val)}`)
          .join('&')
      }

      return `${encodeURIComponent(k)}=${encodeURIComponent(params[k])}`
    })
    .join('&')

export const getParamByNameFromUrlString = (name, url) => {
  name = name.replace(/[\[\]]/g, "\\$&");
  var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
    results = regex.exec(url);
  if (!results) return null;
  if (!results[2]) return '';
  return decodeURIComponent(results[2].replace(/\+/g, " "));
}

export const classNameToSelector = className => '.' + className.split(' ').join('.')