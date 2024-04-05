import express from 'express'
import path from 'path'
import serverRouts from './api.js'

const __dirname = path.resolve()
const app = express()

app.use(serverRouts)

app.get('/', (req, res) => {
    res.send(path.resolve(__dirname, '', '../index.html'))

})

app.get('/qwer', (req, res) => {
    res.send("sdvsd")

})

app.listen(80, () => {
    console.log(`Server has been startred...`)
})




