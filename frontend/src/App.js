import './App.css';
import { useState, useEffect } from 'react';
import axios from "axios";
// import websocket from 'ws'

// REACT BOOTSTRAP
import { 
  Container
  ,Row
  ,Col
  ,Card
  
} from 'react-bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'

// COMPONENTS
import Login from '../src/components/Login'

function App() {
  const test = "http://localhost:8000/api/test"
  const [data, setData] = useState(null);

  useEffect(() => {
    axios
      .get(test)
      .then((response) => {
        setData(response.data);
      })
      .catch((error) => {
        console.log(error);
      });
  }, []);

  return (
    <>
      <Container>
        <Row>
          <Col>
            <Login />
          </Col>
        </Row>
      </Container>
      
      {/* <h1>Test</h1>
      <ul>
        {data?.map((user) => (
          <li key={user.id}>{user.id} {user.name} {user.email}</li>
        ))}
      </ul> */}
    </>
  );
}

export default App;

