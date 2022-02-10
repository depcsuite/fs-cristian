import Button from '@mui/material/Button';
import ButtonGroup from '@mui/material/ButtonGroup';
import {useNavigate} from 'react-router-dom';
function Navbar() {
    const navigate = useNavigate();
  return (

    <ButtonGroup variant="text" size="large" aria-label="large button group">
        <Button variant="contained" onClick={() => navigate('/')}> Home</Button>
        <Button variant="contained" onClick={() => navigate('/signup')}>Signup</Button>
        <Button variant="contained">Login</Button>
    </ButtonGroup>  

  );
}

export default Navbar;
