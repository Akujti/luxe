<template>
    <div>
        <h1 class="mb-3 text-center">Miami Collection</h1>
        <img src="/images/collections/main.jpg" alt="" class="cover-img" height="200px">
        <p class="text-center my-3">Welcome to our real estate listings page, where you'll find a curated selection of
            properties available in top neighborhoods. From modern apartments to luxurious homes, we offer a range of
            options that cater to different preferences and budgets. Each listing includes detailed information,
            high-quality photos, and virtual tours to help you get a clear idea of your future home. Ready to take the
            next step? Reach out to our team to schedule a viewing or ask any questions.</p>
        <div class="row mb-3">
            <div v-for="item in listings" :key="item.ListingId" class="col-md-4 mb-3">
                <div class="listing" @click="toggleSelected(item.ListingId)">
                    <div class="position-relative">
                        <img :src="(item.Media && item.Media.length) ? item.Media[0].MediaURL : ''" class="image">
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
        </div>
        <hr>
        <h2 class="mb-3 text-center">LUXE Listings</h2>
        <p class="text-center my-3">Explore our exclusive real estate listings featuring properties in prime locations.
            Whether you're looking for a cozy apartment or a spacious family home, we have options to match your needs.
            Browse through our listings and contact us to schedule a viewing today.</p>
        <div class="row">
            <div class="col-md-4">
                <img src="/images/collections/second.jpg" alt="" class="cover-img" height="810px">
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div v-for="item in comingSoonListings" :key="item.id" class="col-md-6 mb-3">
                        <div class="listing">
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
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            comingSoonListings: [
                {
                    id: 223,
                    user_id: 79,
                    type: "Single Family",
                    address: "16956 Southwest 33rd Court, Miramar, FL",
                    price: "575000",
                    rental: 0,
                    baths: 2,
                    beds: 3,
                    living_area: 1761.0,
                    lot_size: 0.0,
                    main_image: "new-storage/images/marketing/1719996792U0HhMBIZ5A.jpg",
                    images: "[]",
                    list_date: "2023-09-12",
                    lng: -80.3724991,
                    lat: 25.9778294,
                    created_at: "2023-08-29T04:33:23.000000Z",
                    updated_at: "2024-07-03T08:53:12.000000Z",
                    main_image_url: "http://localhost:8000/new-storage/images/marketing/1719996792U0HhMBIZ5A.jpg",
                },
                {
                    id: 219,
                    user_id: 14,
                    type: "Single Family",
                    address: "9468 SW 227th Ln, Cutler Bay, FL",
                    price: "550000",
                    rental: 0,
                    baths: 2,
                    beds: 3,
                    living_area: 1749.0,
                    lot_size: 5250.0,
                    main_image: "new-storage/images/marketing/1719996704Xkdx4UENJx.jpg",
                    images: "[]",
                    list_date: "2023-09-05",
                    lng: -80.3448913,
                    lat: 25.5554632,
                    created_at: "2023-08-22T20:04:37.000000Z",
                    updated_at: "2024-07-03T08:51:44.000000Z",
                    main_image_url: "http://localhost:8000/new-storage/images/marketing/1719996704Xkdx4UENJx.jpg",
                },
                {
                    id: 248,
                    user_id: 95,
                    type: "Single Family",
                    address: "220 Northwest 131st Street, North Miami, FL",
                    price: "445000",
                    rental: 0,
                    baths: 1,
                    beds: 3,
                    living_area: 984.0,
                    lot_size: 7740.0,
                    main_image:
                        "https://maps.googleapis.com/maps/api/streetview?size=800x400&location=220 Northwest 131st Street, North Miami, FL&fov=90&key=AIzaSyCbvYCR-b_MzBtqFgpY_OJU5oCxrQWwrSI",
                    images: "[]",
                    list_date: "2023-10-04",
                    lng: -80.2033937,
                    lat: 25.8947299,
                    created_at: "2023-09-20T23:53:39.000000Z",
                    updated_at: "2023-09-22T18:25:31.000000Z",
                    main_image_url:
                        "https://maps.googleapis.com/maps/api/streetview?size=800x400&location=220 Northwest 131st Street, North Miami, FL&fov=90&key=AIzaSyCbvYCR-b_MzBtqFgpY_OJU5oCxrQWwrSI",
                },
            ],
            listings: [
                {
                    "BathroomsFull": 5,
                    "WaterfrontYN": true,
                    "LivingArea": 3785,
                    "BedroomsTotal": 4,
                    "GarageSpaces": 1,
                    "BridgeModificationTimestamp": "2024-07-23T13:33:21.532Z",
                    "Media": [
                        {
                            "Order": 1,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m1",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/83dcefb7.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_1",
                            "ShortDescription": null
                        },
                        {
                            "Order": 2,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m2",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/1ad5be0d.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_2",
                            "ShortDescription": null
                        },
                        {
                            "Order": 3,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m3",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/6dd28e9b.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_3",
                            "ShortDescription": null
                        },
                        {
                            "Order": 4,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m4",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/f3b61b38.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_4",
                            "ShortDescription": null
                        },
                        {
                            "Order": 5,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m5",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/84b12bae.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_5",
                            "ShortDescription": null
                        },
                        {
                            "Order": 6,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m6",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/1db87a14.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_6",
                            "ShortDescription": null
                        },
                        {
                            "Order": 7,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m7",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/6abf4a82.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_7",
                            "ShortDescription": null
                        },
                        {
                            "Order": 8,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m8",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/fa005713.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_8",
                            "ShortDescription": null
                        },
                        {
                            "Order": 9,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m9",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/8d076785.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_9",
                            "ShortDescription": null
                        },
                        {
                            "Order": 10,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m10",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/a15d25e1.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_10",
                            "ShortDescription": null
                        },
                        {
                            "Order": 11,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m11",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/d65a1577.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_11",
                            "ShortDescription": null
                        },
                        {
                            "Order": 12,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m12",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/4f5344cd.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_12",
                            "ShortDescription": null
                        },
                        {
                            "Order": 13,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m13",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/3854745b.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_13",
                            "ShortDescription": null
                        },
                        {
                            "Order": 14,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m14",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/a630e1f8.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_14",
                            "ShortDescription": null
                        },
                        {
                            "Order": 15,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m15",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/d137d16e.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_15",
                            "ShortDescription": null
                        },
                        {
                            "Order": 16,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m16",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/483e80d4.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_16",
                            "ShortDescription": null
                        },
                        {
                            "Order": 17,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m17",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/3f39b042.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_17",
                            "ShortDescription": null
                        },
                        {
                            "Order": 18,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m18",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/af86add3.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_18",
                            "ShortDescription": null
                        },
                        {
                            "Order": 19,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m19",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/d8819d45.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_19",
                            "ShortDescription": null
                        },
                        {
                            "Order": 20,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m20",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/8a707622.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_20",
                            "ShortDescription": null
                        },
                        {
                            "Order": 21,
                            "MediaKey": "c499750cec4414484c43597eb1f443a8-m21",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/384841276/fd7746b4.jpeg",
                            "ResourceRecordKey": "c499750cec4414484c43597eb1f443a8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "384841276_21",
                            "ShortDescription": null
                        }
                    ],
                    "LivingAreaUnits": "Square Feet",
                    "Latitude": 25.7580889,
                    "PropertyType": "Residential",
                    "ListPrice": 5950900,
                    "Longitude": -80.19290720000001,
                    "UnparsedAddress": "99 SE 5 street # 6402, Miami FL 33131",
                    "MIAMIRE_PoolYN": null,
                    "DaysOnMarket": 354,
                    "ListingId": "A11430692",
                    "LotSizeSquareFeet": 0,
                    "ListingKey": "c499750cec4414484c43597eb1f443a8",
                    "FeedTypes": [
                        "IDX"
                    ],
                    "url": "api.bridgedataoutput.com/api/v2/miamire/listings/c499750cec4414484c43597eb1f443a8"
                },
                {
                    "BathroomsFull": 1,
                    "WaterfrontYN": true,
                    "LivingArea": 478,
                    "BedroomsTotal": 0,
                    "GarageSpaces": 1,
                    "BridgeModificationTimestamp": "2024-08-27T14:02:31.941Z",
                    "Media": [
                        {
                            "Order": 1,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m1",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/83dcefb7.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_1",
                            "ShortDescription": null
                        },
                        {
                            "Order": 2,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m2",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/1ad5be0d.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_2",
                            "ShortDescription": null
                        },
                        {
                            "Order": 3,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m3",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/6dd28e9b.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_3",
                            "ShortDescription": null
                        },
                        {
                            "Order": 4,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m4",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/f3b61b38.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_4",
                            "ShortDescription": null
                        },
                        {
                            "Order": 5,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m5",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/84b12bae.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_5",
                            "ShortDescription": null
                        },
                        {
                            "Order": 6,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m6",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/1db87a14.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_6",
                            "ShortDescription": null
                        },
                        {
                            "Order": 7,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m7",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/6abf4a82.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_7",
                            "ShortDescription": null
                        },
                        {
                            "Order": 8,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m8",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/fa005713.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_8",
                            "ShortDescription": null
                        },
                        {
                            "Order": 9,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m9",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/8d076785.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_9",
                            "ShortDescription": null
                        },
                        {
                            "Order": 10,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m10",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/a15d25e1.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_10",
                            "ShortDescription": null
                        },
                        {
                            "Order": 11,
                            "MediaKey": "91b856ea7d39317acbf6fe1abb1b64d8-m11",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/400129141/d65a1577.jpeg",
                            "ResourceRecordKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "400129141_11",
                            "ShortDescription": null
                        }
                    ],
                    "LivingAreaUnits": "Square Feet",
                    "Latitude": 25.7673104,
                    "PropertyType": "Residential",
                    "ListPrice": 310000,
                    "Longitude": -80.1843371,
                    "UnparsedAddress": "520 Brickell Key Dr # A1617, Miami FL 33131",
                    "MIAMIRE_PoolYN": null,
                    "DaysOnMarket": 0,
                    "ListingId": "A11648431",
                    "LotSizeSquareFeet": 0,
                    "ListingKey": "91b856ea7d39317acbf6fe1abb1b64d8",
                    "FeedTypes": [
                        "IDX"
                    ],
                    "url": "api.bridgedataoutput.com/api/v2/miamire/listings/91b856ea7d39317acbf6fe1abb1b64d8"
                },
                {
                    "BathroomsFull": 2,
                    "WaterfrontYN": false,
                    "LivingArea": 1747,
                    "BedroomsTotal": 2,
                    "GarageSpaces": 1,
                    "BridgeModificationTimestamp": "2024-08-27T14:33:42.427Z",
                    "Media": [
                        {
                            "Order": 1,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m1",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/83dcefb7.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_1",
                            "ShortDescription": null
                        },
                        {
                            "Order": 2,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m2",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/1ad5be0d.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_2",
                            "ShortDescription": null
                        },
                        {
                            "Order": 3,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m3",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/6dd28e9b.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_3",
                            "ShortDescription": null
                        },
                        {
                            "Order": 4,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m4",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/f3b61b38.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_4",
                            "ShortDescription": null
                        },
                        {
                            "Order": 5,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m5",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/84b12bae.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_5",
                            "ShortDescription": null
                        },
                        {
                            "Order": 6,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m6",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/1db87a14.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_6",
                            "ShortDescription": null
                        },
                        {
                            "Order": 7,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m7",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/6abf4a82.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_7",
                            "ShortDescription": null
                        },
                        {
                            "Order": 8,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m8",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/fa005713.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_8",
                            "ShortDescription": null
                        },
                        {
                            "Order": 9,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m9",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/8d076785.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_9",
                            "ShortDescription": null
                        },
                        {
                            "Order": 10,
                            "MediaKey": "ebae9fa5d8bb858035aa38245dc01001-m10",
                            "MediaURL": "https://dvvjkgh94f2v6.cloudfront.net/523fa3e6/392167843/a15d25e1.jpeg",
                            "ResourceRecordKey": "ebae9fa5d8bb858035aa38245dc01001",
                            "ResourceName": "Property",
                            "ClassName": "Residential",
                            "MediaCategory": "Photo",
                            "MimeType": "image/jpeg",
                            "MediaObjectID": "392167843_10",
                            "ShortDescription": null
                        }
                    ],
                    "LivingAreaUnits": "Square Feet",
                    "Latitude": 25.758689,
                    "PropertyType": "Residential",
                    "ListPrice": 2399000,
                    "Longitude": -80.19142959999999,
                    "UnparsedAddress": "1435 Brickell Ave # 3112, Miami FL 33131",
                    "MIAMIRE_PoolYN": null,
                    "DaysOnMarket": 188,
                    "ListingId": "A11536326",
                    "LotSizeSquareFeet": 0,
                    "ListingKey": "ebae9fa5d8bb858035aa38245dc01001",
                    "FeedTypes": [
                        "IDX"
                    ],
                    "url": "api.bridgedataoutput.com/api/v2/miamire/listings/ebae9fa5d8bb858035aa38245dc01001"
                }
            ]
        }
    },
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