import express from 'express'
import path from 'path'
import serverRouts from './api.js'

const __dirname = path.resolve()
const app = express()
const PORT = process.env.PORT ?? 19705

app.use(serverRouts)

app.get('/', (req, res) => {
    res.send(path.resolve(__dirname, '', '../index.html'))

})

app.listen(PORT, () => {
    console.log(`Server has been startred on port ${PORT}...`)
})


