function isValidTaskName(name){
    const chars = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;
    return !chars.test(name);
}