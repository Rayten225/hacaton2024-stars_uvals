import express from 'express'
import path from 'path'

const __dirname = path.resolve()
const app = express()
const PORT = process.env.PORT ?? 3000

app.get('/', (req, res) => {
    res.sendFile(path.resolve(__dirname, '', '../index.html'))

})

app.listen(PORT, () => {
    console.log(`Server has been startred on port ${PORT}...`)
})


