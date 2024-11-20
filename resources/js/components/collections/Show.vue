<template>
    <div>
        <div class="text-center mb-3">
            <img src="/images/logo-black.png" alt="" height="100px" class="m-auto">
            <hr>
        </div>
        <h1 class="mb-3 text-center">{{ collection.name }}</h1>
        <img src="/images/collections/main.jpg" alt="" class="cover-img" height="200px">
        <p class="text-center my-3">Welcome to our real estate listings page, where you'll find a curated selection of
            properties available in top neighborhoods. From modern apartments to luxurious homes, we offer a range of
            options that cater to different preferences and budgets. Each listing includes detailed information,
            high-quality photos, and virtual tours to help you get a clear idea of your future home. Ready to take the
            next step? Reach out to our team to schedule a viewing or ask any questions.</p>
        <div class="row mb-3">
            <div v-for="item in collection.listings" :key="item.id" class="col-md-4 mb-3"
                v-if="item.source == 'bridge'">
                <div class="listing">
                    <div class="position-relative">
                        <img :src="item.main_image_url" class="image">
                        <div class="data p-2">
                            <p>${{ item.price?.toLocaleString() }} | {{
                                item.address }}
                            </p>
                            <p>
                                Beds {{ item.beds }}
                                | Baths {{ item.baths }}
                                |
                                {{ item.living_area ? (item.living_area).toLocaleString() : '-' }}
                                {{ 'SqFt' }}
                            </p>
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
                                    <th>On Market</th>
                                    <td>{{ item.days_on_market ?? 'N/A' }} Days</td>
                                </tr>
                                <tr>
                                    <th>Garage(s)</th>
                                    <td>{{ item.garages ?? 'N/A' }}</td>
                                </tr>
                                <tr>
                                    <th>Pool</th>
                                    <td>{{ item.pool ? 'Yes' : 'No' }}</td>
                                </tr>
                                <tr>
                                    <th>Waterfront</th>
                                    <td>{{ item.waterfront ? 'Yes' : 'No' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h2 class="mb-3 text-center">LUXE Coming Soon Listings</h2>
        <p class="text-center my-3">Explore our exclusive real estate listings featuring properties in prime locations.
            Whether you're looking for a cozy apartment or a spacious family home, we have options to match your needs.
            Browse through our listings and contact us to schedule a viewing today.</p>
        <div class="row">
            <div v-for="item in collection.listings" :key="item.id" class="col-md-4 mb-3" v-if="item.source == 'luxe'">
                <div class="listing">
                    <div class="position-relative">
                        <img :src="item.main_image_url" class="image">
                        <div class="data p-2">
                            <p>${{ item.price?.toLocaleString() ?? '-' }} | {{
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
                                    <td>{{ item.days_on_market ?? 'N/A' }} Days</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: ['collection'],
    data() {
        return {
        }
    }
}
</script>
<style scoped>
* {
    font-family: 'Montserrat', sans-serif;
}

.cover-img {
    width: 100%;
    border-radius: 10px;
    object-fit: cover;
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
    height: 300px;
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
</style>