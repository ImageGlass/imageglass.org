
export function getCSSVar(cssVar) {
    return getComputedStyle(document.body).getPropertyValue(cssVar)
}