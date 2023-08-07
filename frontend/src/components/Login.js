import React from 'react'
import { 
    Container
    ,Row
    ,Col
    ,Card
    ,Button
    ,InputGroup
    ,Form
    ,Badge
} from 'react-bootstrap'
import 'bootstrap/dist/css/bootstrap.min.css'

const Login = () => {
  return (
    <>
        <Container>
            <Row className="p-5">
                <Col xxl={6} xl={6} lg={6} md={12} sm={12} xs={12} style={{background: 'linear-gradient(to bottom, #000, transparent'}}>
                </Col>
                <Col xxl={6} xl={6} lg={6} md={12} sm={12} xs={12}>
                    <Card className="text-center custom-bg float-end" style={{
                        backgroundColor: 'transparent',
                        border: 0,
                        width: '400px'
                    }}>
                        <Card.Header style={{border: 0}}>
                            <h1>ONE</h1>
                        </Card.Header>
                        <Card.Body>
                            <InputGroup className='mb-3 p-3' style={{bordeRadius: 0}}>
                                <InputGroup.Text
                                    className="input-bg"
                                    id='basic-addon1' 
                                    style={{
                                        background: 'linear-gradient(to bottom, #000, #000)',
                                        border: 0,
                                        color: '#fff'
                                    }}
                                >
                                    USERNAME
                                </InputGroup.Text>
                                <Form.Control
                                    type="text"
                                    placeholder="username"
                                    aria-label="username"
                                    aria-describedby="basic-addon1"
                                    style={{
                                        background: 'linear-gradient(to bottom, #000, #22577A)',
                                        border: 0,
                                        color: '#fff'
                                    }}
                                />
                            </InputGroup>
                            <InputGroup className='mb-3 p-3'>
                                <InputGroup.Text
                                    id='basic-addon1'
                                    style={{
                                        background: 'linear-gradient(to bottom, #000, #000)',
                                        border: 0,
                                        bordeRadius: 0,
                                        color: '#fff'
                                    }}
                                >
                                    PASSWORD
                                </InputGroup.Text>
                                <Form.Control
                                    type="password"
                                    placeholder="******"
                                    aria-label="password"
                                    aria-describedby="passwordHelpBlock"
                                    id="inputPassword5"
                                    style={{
                                        background: 'linear-gradient(to bottom, #000, #22577A)',
                                        border: 0,
                                        bordeRadius: 0,
                                        color: '#fff'
                                    }}
                                />
                            </InputGroup>
                        </Card.Body>
                        <Card.Footer style={{border: 0}}>
                            <Button
                                className="btn btn-sm float-end px-5 btn-hover"
                                style={{
                                    background: 'linear-gradient(to bottom, #000, #22577A)',
                                    border: 0,
                                    color: '#fff'
                                }}
                            >
                                LOGIN
                            </Button>
                        </Card.Footer>
                    </Card>
                </Col>
            </Row>
        </Container>
    </>
  )
}

export default Login