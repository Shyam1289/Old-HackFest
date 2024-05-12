import React from 'react'
import { Box, Stack } from "@chakra-ui/react"
import Card from './Card'
import axios from "axios";


const Home = () => {


    const checkoutHandler = async (amount) => {

        const { data: { key } } = await axios.get("http://www.localhost:4000/api/getkey")

        const { data: { order } } = await axios.post("http://localhost:4000/api/checkout", {
            amount
        })

        const options = {
            key,
            amount: order.amount,
            currency: "INR",
            name: "CoalField Coders",
            description: "",
            image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQd3lpf4SIikgfgguHh0HDBc2tp5W3eqmW56iFxNMLAzw&s",
            order_id: order.id,
            callback_url: "http://localhost:4000/api/paymentverification",
            prefill: {
                name: "Ram Krishna",
                email: "ram@gmail.com",
                contact: "4574436878"
            },
            notes: {
                "address": "Razorpay Corporate Office"
            },
            theme: {
                "color": "#121212"
            }
        };
        const razor = new window.Razorpay(options);
        razor.open();
    }

    return (
        <Box>

            <Stack h={"100vh"} alignItems="center" justifyContent="center" direction={["column", "row"]}>

                <Card amount={1000} img={"https://t3.ftcdn.net/jpg/03/16/76/04/360_F_316760432_mxKzePoS2XnF20z8XtP6gpwDkF01GTts.jpg"} checkoutHandler={checkoutHandler} />


            </Stack>
        </Box>
    )
}

export default Home