<template>
    <div class="mt-5">
        <div class="mb-5">
            <h1 class="title">Collections</h1>
            <form @submit.prevent="searchListings()">
                <label for="">Search Listings</label>
                <div class="row">
                    <div class="col-md-3">
                        <div class="d-flex gap">
                            <input type="text" name="zip" class="form-control" placeholder="Street"
                                v-model="search.street">
                            <input type="text" name="zip" class="form-control" placeholder="ZIP Code"
                                v-model="search.zip">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex gap">
                            <input type="text" class="form-control" placeholder="Min Price" v-model="search.price_min">
                            <input type="text" class="form-control" placeholder="Max Price" v-model="search.price_max">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex gap">
                            <input type="text" class="form-control" placeholder="Beds" v-model="search.beds">
                            <input type="text" class="form-control" placeholder="Baths" v-model="search.baths">
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <button class="btn btn-luxe w-100 form-control" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div id="map"></div>
            </div>
            <div class="col-md-7">
                <div>
                    <div class="row justify-content-between align-items-center mb-3 step-list border py-2 px-3 rounded">
                        <p :class="{ active: step == 1 }">Miami Realtors</p>
                        <p :class="{ active: step == 2 }">Coming Soon Listings</p>
                        <p :class="{ active: step == 3 }">Finish</p>
                    </div>
                    <div class="d-flex justify-content-center" v-if="loading">
                        <div id="loading"></div>
                    </div>
                    <div class="row mb-3" v-if="step == 1">
                        <div v-for="item in listings" :key="item.ListingId" class="col-md-6 mb-3">
                            <div class="listing" :class="{ active: isSelected(item.ListingId) }"
                                @click="toggleSelected(item.ListingId)">
                                <div class="position-relative">
                                    <img :src="(item.Media && item.Media.length) ? item.Media[0].MediaURL : ''"
                                        class="image">
                                    <div class="data p-2">
                                        <p>${{ item.ListPrice.toLocaleString() }} | {{
                                            item.UnparsedAddress.split(',')[0] }}
                                        </p>
                                        <p>
                                            Beds {{ item.BedroomsTotal }}
                                            | Baths {{ item.BathroomsFull }}
                                            |
                                            {{ item.LivingArea ? (item.LivingArea).toLocaleString() : '-' }}
                                            {{ item.LivingAreaUnits == 'Square Feet' ? 'SqFt' : '' }}
                                        </p>
                                    </div>
                                </div>
                                <div class="p-2">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Prop Type </th>
                                                <td>{{ item['PropertyType'] ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Lot size</th>
                                                <td>{{ item['LotSizeSquareFeet'].toLocaleString() ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>On Market</th>
                                                <td>{{ item['DaysOnMarket'] ?? 'N/A' }} Days</td>
                                            </tr>
                                            <tr>
                                                <th>Garage(s)</th>
                                                <td>{{ item['GarageSpaces'] ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pool</th>
                                                <td>{{ item['MIAMIRE_PoolYN'] ? 'Yes' : 'No' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Waterfront</th>
                                                <td>{{ item['WaterfrontYN'] ? 'Yes' : 'No' }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div v-if="!loading && !listings.length">
                            <p>No listings found</p>
                        </div>
                    </div>
                    <div class="row mb-3" v-if="step == 2">
                        <div v-for="item in comingSoonListings" :key="item.id" class="col-md-6 mb-3">
                            <div class="listing" :class="{ active: isSelected(item.id) }"
                                @click="toggleSelected(item.id)">
                                <div class="position-relative">
                                    <img :src="item.main_image_url" class="image">
                                    <div class="data p-2">
                                        <!-- <p>${{ item.price?.toLocaleString() }} | {{
                                            item.address.split(',')[0] }}
                                        </p>
                                        <p>
                                            Beds {{ item.beds }}
                                            | Baths {{ item.baths }}
                                            | {{ item.living_area ? (item.living_area).toLocaleString() :
                                                '-'
                                            }} SqFt
                                        </p> -->
                                    </div>
                                </div>
                                <div class="p-2">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <th>Prop Type </th>
                                                <td>{{ item.type ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Lot size</th>
                                                <td>{{ item.lot_size?.toLocaleString() ?? 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>On Market</th>
                                                <td>{{ item.list_date ?? 'N/A' }} Days</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div v-if="!loading && !listings.length">
                            <p>No listings found</p>
                        </div>
                    </div>
                    <div class="row justify-content-between align-items-center mb-3">
                        <button class="step-btn" :disabled="step <= 1" @click="changeStep(-1)">Previous</button>
                        <button class="step-btn" :disabled="step >= 3" @click="changeStep(1)">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Loader } from "@googlemaps/js-api-loader"
export default {
    mounted() {
        this.initMap()

    },
    data() {
        return {
            token: process.env.MIX_CMA_SERVER_TOKEN,
            listings: [],
            comingSoonListings: [],
            step: 1,
            search: {
                zip: '',
                street: '',
                price_min: null,
                price_max: null,
                beds: null,
                baths: null,
            },
            selected: [],
            loading: false,
            loader: new Loader({
                apiKey: process.env.MIX_GOOGLE_MAPS_API_KEY,
                version: "weekly",
            }),
            map: null,
            bounds: null,
            markers: [],
            svgMarker: {
                path: 'M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z',
                fillColor: 'black',
                fillOpacity: 0.72,
                strokeWeight: 0,
                rotation: 0,
                scale: 2,
            }
        }
    },
    methods: {
        changeStep(step) {
            this.step += step
        },
        searchListings() {
            if (this.step == 1)
                this.getBridgeDataListings()
            else if (this.step == 2)
                this.getComingSoonListings()
        },
        getComingSoonListings() {
            axios.get('/listings')
                .then(response => {
                    this.comingSoonListings = response.data.data
                })
        },
        getBridgeDataListings() {
            let query = 'https://api.bridgedataoutput.com/api/v2/miamire/listings?access_token=' + this.token +
                '&StandardStatus=Active&limit=20'
            console.log(this.search);
            console.log((this.search.zip ?? '') + ' ' + (this.search.street ?? ''));
            if (this.search.zip || this.search.street)
                query += '&UnparsedAddress.in=' + (this.search.zip ?? '') + ' ' + (this.search.street ?? '')
            if (this.search.price_min)
                query += '&ListPrice.gte=' + this.search.price_min
            if (this.search.price_max)
                query += '&ListPrice.lte=' + this.search.price_max
            if (this.search.beds)
                query += '&BedroomsTotal=' + this.search.beds
            if (this.search.baths)
                query += '&BathroomsFull=' + this.search.baths

            this.markers.forEach(marker => marker.setMap(null));
            this.loading = true
            this.listings = []
            axios.get(query)
                .then(async response => {
                    this.listings = response.data.bundle
                    const parent = this
                    const { Marker } = await google.maps.importLibrary("marker");

                    this.listings.forEach(location => {
                        const lat = parseFloat(location.Latitude);
                        const lng = parseFloat(location.Longitude);
                        if (!isNaN(lat) && !isNaN(lng)) {
                            const markerPosition = { lat, lng };
                            const marker = new Marker({
                                position: markerPosition,
                                map: parent.map,
                                title: "Listing",
                                // icon: this.svgMarker
                            });
                            this.markers.push(marker);
                            this.bounds.extend(markerPosition);
                        }
                    });
                    this.map.fitBounds(this.bounds);
                })
                .catch(error => {
                    console.log(error)
                }).finally(() => this.loading = false)
        },
        toggleSelected(listingId) {
            const index = this.selected.indexOf(listingId);
            if (index === -1) {
                this.selected.push(listingId);
            } else {
                this.selected.splice(index, 1);
            }
        },
        isSelected(listingId) {
            return this.selected.includes(listingId);
        },
        initMap() {
            this.loader.load().then(async () => {
                const { Map } = await google.maps.importLibrary("maps");
                let map = new Map(document.getElementById("map"), {
                    center: { lat: 25.8617, lng: -80.4018 },
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                this.map = map;
                this.bounds = new google.maps.LatLngBounds();
            });

        },
    }
}
</script>
<style scoped>
h1.title {
    font-family: 'gothicbold';
    text-align: center;
}

.step-btn {
    border-radius: 5px;
    background: #262626;
    color: white;
    height: auto;
    padding: 5px 10px;
    min-width: 100px;
}

.step-btn:disabled {
    background: #474747;
}

.step-list p {
    font-size: 18px;
    margin: 0;
    font-family: 'Montserrat';
}

.step-list p.active {
    font-weight: bold;
}

#map {
    height: 600px;
    border-radius: 10px;
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
    position: sticky;
}

.gap {
    gap: 5px;
}

.listing {
    height: 100%;
    border: 1px solid #ececec;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075);
    color: black;
}

.listing * {
    font-family: 'Montserrat';
}

.listing .image {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.listing .data {
    position: absolute;
    bottom: 0;
    color: white;
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    padding: 5px;
}

.listing .data p {
    margin-bottom: 0;
}

.listing table {
    width: 100%;
}

.listing table tr {
    padding-bottom: 5px;
}

.listing table td {
    text-align: right;
}

.listing.active {
    outline: 2px solid black;
}

.listing:hover {
    outline: 2px solid black;
    cursor: pointer;
}

#loading {
    display: inline-block;
    width: 50px;
    height: 50px;
    border: 3px solid rgba(255, 255, 255, .3);
    border-radius: 50%;
    border-top-color: #000;
    animation: spin 1s ease-in-out infinite;
    -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
    to {
        -webkit-transform: rotate(360deg);
    }
}

@-webkit-keyframes spin {
    to {
        -webkit-transform: rotate(360deg);
    }
}
</style>