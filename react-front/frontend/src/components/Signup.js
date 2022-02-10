import TextField from '@mui/material/TextField';
import Button from '@mui/material/Button';
import {Form} from 'react-bootstrap';
import {useEffect} from 'react';
import {getData} from '../services';
function Signup() {
    useEffect(() => {
        let resp = getData('http://localhost/cursofs/React-api/verUsuarios.php');
        resp.then(r => console.log(r));
        //resp.then(console.log(resp));
    }, []);
    return (
        <div>
            <h2>User signup form</h2>
            <Form>
                <Form.Group className="mb-3" controlId="formBasicEmail">
                <TextField id="standard-basic" label="Username" variant="standard" />
                </Form.Group>
                <Form.Group className="mb-3" controlId="formBasicEmail">
                <TextField id="standard-basicD" label="Password" variant="standard" />
                </Form.Group>
                <Form.Group className="mb-3" controlId="formBasicEmail">
                <Button variant="contained">Sign up</Button>
                </Form.Group>
            </Form>


        </div>
    );
}

export default Signup;
