export async function postData(URL, sentData) {
    const response = await fetch(URL,
        {   
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(sentData) 
        });
    const payload = await response.json();
};
export async function getData(URL) {
    const response = await fetch(URL,
        {   
            method: 'GET',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            }, 
        });
    const payload = await response.json();
    return(payload);
};