router.get("/api", (req, res) => {
    res.json({
        Amphitheater: '1',
        ArtPark: '1',
        Gazebos: '1',
        WorkshopArea: '1',
        Glamping: '1',
        ChildrensPlayground: '1',
        Houses: '1',
        SkiBase: '1',
        PicnicArea: '1',
        RestingPlace: '1',
        MiniZoo: '1',
        PondArrangement: '1',
        Greenhouse: '1',
        TheSpring: '1',
        ObservationTower: '1',
        BiathlonStadium: '1',
        DownhillTrack: '1',
        TubingRoute: '1',
        EcoSchool: '1'
    })
})

export default router