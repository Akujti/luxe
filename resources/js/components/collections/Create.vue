<template>
    <div class="mt-5">
        <div class="mb-3">
            <h1 class="title">Client Saved Searches</h1>
            <form @submit.prevent="searchListings()" v-if="showSearchFilters">
                <label for="">Search Listings</label>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <input type="text" name="zip" class="form-control mb-1" placeholder="Street"
                            v-model="search.street">
                        <input type="text" name="zip" class="form-control mb-1" placeholder="ZIP Code"
                            v-model="search.zip">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control mb-1" placeholder="Min Price" v-model="search.price_min">
                        <input type="text" class="form-control mb-1" placeholder="Max Price" v-model="search.price_max">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control mb-1" placeholder="Beds" v-model="search.beds">
                        <input type="text" class="form-control mb-1" placeholder="Baths" v-model="search.baths">
                    </div>
                </div>
                <button class="btn btn-luxe form-control w-auto" type="submit">Search</button>
            </form>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div>
                    <button class="btn-luxe form-control mb-3" v-if="!showSearchFilters"
                        @click="showSearchFilters = !showSearchFilters">Expand Search Filters</button>
                </div>
                <div class="sticky">
                    <div id="map" class="mb-5"></div>
                </div>
            </div>
            <div class="col-md-7">
                <div>
                    <div
                        class="d-flex justify-content-between align-items-center mb-3 step-list border py-2 px-3 rounded">
                        <p :class="{ active: step == 1 }">Miami Realtors</p>
                        <p :class="{ active: step == 2 }">Coming Soon Listings</p>
                        <p :class="{ active: step == 3 }">Finish</p>
                    </div>
                    <div class="d-flex justify-content-center" v-if="loading">
                        <div id="loading"></div>
                    </div>

                    <div class="row mb-3" v-if="step == 1">
                        <div v-for="item in listings" :key="item.ListingId" class="col-md-6 mb-3">
                            <div class="listing" :class="{ active: isSelected(item) }" @click="toggleSelected(item)">
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
                                    <div class="position-absolute" style="top:10px;right:20px">
                                        <input type="checkbox" :checked="isSelected(item)" class="checkbox">
                                    </div>
                                </div>
                                <div class=" p-2">
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
                        <div v-if="!loading && !listings.length" class="col-md-6">
                            <p>No listings found</p>
                        </div>
                    </div>
                    <div class="row mb-3" v-if="step == 2">
                        <div v-for="item in comingSoonListings" :key="item.id" class="col-md-6 mb-3">
                            <div class="listing" :class="{ active: isSelected(item) }" @click="toggleSelected(item)">
                                <div class="position-relative">
                                    <img :src="item.main_image_url" class="image">
                                    <div class="data p-2">
                                        <p>${{ item.price?.toLocaleString() }} | {{
                                            item.address.split(',')[0] }}
                                        </p>
                                        <p>
                                            Beds {{ item.beds }}
                                            | Baths {{ item.baths }}
                                            | {{ item.living_area ? (item.living_area).toLocaleString() :
                                                '-'
                                            }} SqFt
                                        </p>
                                    </div>
                                    <div class="position-absolute" style="top:10px;right:20px">
                                        <input type="checkbox" :checked="isSelected(item)" class="checkbox">
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
                                                <td>{{ daysFromToday(item.list_date) ?? 'N/A' }} Days</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div v-if="!loading && !listings.length" class="col-md-6">
                            <p>No listings found</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3" v-if="step == 3">
                        <div class="w-100">
                            <form ref="collectionForm">
                                <div class="form-group">
                                    <label for="">Collection Name</label>
                                    <input type="text" class="form-control" v-model="collection.name" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Recipient Email</label>
                                    <input type="email" class="form-control" v-model="collection.email">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="d-flex mb-3" v-if="step == 4">
                        <p> We have sent an email to <a :href="'mailto:' + collection.email">{{ collection.email
                                }}</a>.
                            Here is the public link to share with your client <a
                                :href="'/collections/' + collection.id">Collection
                                Link</a></p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <button class="step-btn" :disabled="step <= 1" @click="changeStep(-1)">Previous</button>
                        <button class="step-btn" :disabled="step >= 3" @click="changeStep(1)"
                            v-if="step < 3">Next</button>
                        <button class="step-btn" @click="storeCollection()" v-if="step == 3">Submit</button>
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
            collection: {
                id: null
            },
            step: 1,
            search: {
                zip: '',
                street: '',
                price_min: '',
                price_max: '',
                beds: '',
                baths: '',
            },
            selected: [],
            loading: false,
            loader: new Loader({
                apiKey: process.env.MIX_GOOGLE_MAPS_API_KEY,
                version: "weekly",
                libraries: ["maps", "marker"],
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
            },
            showSearchFilters: true
        }
    },
    methods: {
        async changeStep(step) {
            window.scrollTo(0, 0);
            this.step += step
        },
        async storeCollection(step) {
            const form = this.$refs.collectionForm;
            console.log(form.checkValidity());
            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }
            let data = {
                name: this.collection.name,
                email: this.collection.email,
                listings: this.selected
            }
            const res = await axios.post('/user/collections', data)
            this.collection.id = res.data.id
            this.changeStep(1)
        },
        searchListings() {
            this.getBridgeDataListings()
            this.getComingSoonListings()
            this.showSearchFilters = false
        },
        getComingSoonListings() {
            const params = new URLSearchParams(this.search).toString();
            axios.get('/listings?' + params)
                .then(async response => {
                    const { Marker } = await google.maps.importLibrary("marker");
                    this.comingSoonListings = response.data.data;
                    this.comingSoonListings.forEach(location => {
                        location.source = 'luxe';
                        if (location.lat && location.lng) {
                            this.addLocationMarker(location, Marker);
                        }
                    });
                    this.map.fitBounds(this.bounds);
                })
        },
        getBridgeDataListings() {
            let query = 'https://api.bridgedataoutput.com/api/v2/miamire/listings?access_token=' + this.token +
                '&fields=ListingId,Media,ListPrice,UnparsedAddress,BedroomsTotal,BathroomsFull,LivingArea,LivingAreaUnits,PropertyType,LotSizeSquareFeet,DaysOnMarket,OnMarketDate,GarageSpaces,MIAMIRE_PoolYN,WaterfrontYN,Latitude,Longitude' +
                '&StandardStatus=Active&limit=20'
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

            this.markers?.forEach(marker => marker.setMap(null));
            this.loading = true
            this.listings = []
            this.bounds = new google.maps.LatLngBounds();
            axios.get(query)
                .then(async response => {
                    this.listings = response.data.bundle
                    const { Marker } = await google.maps.importLibrary("marker");

                    this.listings.forEach(location => {
                        location.address = location.UnparsedAddress?.split(',')[0]
                        location.main_image_url = (location.Media && location.Media.length) ? location.Media[0].MediaURL : ''
                        location.price = location.ListPrice
                        location.beds = location.BedroomsTotal
                        location.baths = location.BathroomsFull
                        location.garages = location.GarageSpaces
                        location.pool = location.MIAMIRE_PoolYN
                        location.waterfront = location.WaterfrontYN
                        location.lat = location.Latitude
                        location.lng = location.Longitude
                        location.list_date = location.OnMarketDate
                        location.type = location.PropertyType
                        location.living_area = location.LivingArea
                        location.source = 'bridge'
                        location.id = location.ListingId
                        this.addLocationMarker(location, Marker);
                    });
                    this.map.fitBounds(this.bounds);
                })
                .catch(error => {
                    console.log(error)
                }).finally(() => this.loading = false)
        },
        addLocationMarker(location, Marker) {
            const svgMarker = {
                path: 'M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z',
                fillColor: 'black',
                fillOpacity: 0.72,
                strokeWeight: 0,
                rotation: 0,
                scale: 2,
                anchor: new google.maps.Point(15, 30),
            }
            const lat = parseFloat(location.lat);
            const lng = parseFloat(location.lng);
            if (!isNaN(lat) && !isNaN(lng)) {
                const markerPosition = { lat, lng };
                const marker = new Marker({
                    position: markerPosition,
                    map: this.map,
                    title: "Listing",
                    icon: svgMarker
                });
                this.markers.push(marker);
                this.bounds.extend(markerPosition);
                const infoContent = `
                    <div class="listing">
                        <div>
                            <img src="${location.main_image_url}" class="image" 
                                style="width:100%;height:120px;object-fit:cover;border-radius:5px;">
                        </div>
                        <p class="mt-2 mb-1" style="font-size:16px;font-weight:bold">${location.address}</p>
                        <p class="mb-2">$ ${location.price.toLocaleString() ?? '-'}</p>
                        <p class="mb-1">Beds: ${location.beds ?? '-'}</p>
                        <p class="mb-1">Baths: ${location.baths ?? '-'}</p>
                    </div>`;
                const infoWindow = new google.maps.InfoWindow({
                    content: infoContent,
                });

                marker.addListener('click', () => {
                    infoWindow.open(this.map, marker);
                });
            }
        },
        toggleSelected(listing) {
            const index = this.selected.findIndex(item => item.id === listing.id);
            if (index === -1) {
                this.selected.push(listing);
            } else {
                this.selected.splice(index, 1);
            }
        },
        isSelected(listing) {
            return this.selected.some(item => item.id === listing.id);
        },
        initMap() {
            this.loader.load().then((google) => {
                let map = new google.maps.Map(document.getElementById("map"), {
                    center: { lat: 25.8617, lng: -80.4018 },
                    zoom: 10,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                });
                this.map = map;
                this.bounds = new google.maps.LatLngBounds();
            });

        },
        daysFromToday(date) {
            if (date) {
                const givenDate = new Date(date);
                const today = new Date();
                // Calculate the difference in time and convert to days
                const diffInTime = today - givenDate;
                return Math.floor(diffInTime / (1000 * 60 * 60 * 24));
            }
        }
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
}

.sticky {
    position: sticky;
    top: 150px;
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

.listing .checkbox {
    appearance: none;
    -webkit-appearance: none;
    width: 20px;
    height: 20px;
    background-color: white;
    border: 1px solid #000;
    cursor: pointer;
    outline: none;
    border-radius: 4px;
    display: inline-block;
}

.listing .checkbox:checked {
    background-color: black;
    /* Keep background black */
    border-color: black;
    /* Optional: Add border color when checked */
}

.listing .checkbox:checked::after {
    content: '✓';
    color: white;
    font-size: 16px;
    position: absolute;
    top: -1px;
    left: 4px;
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