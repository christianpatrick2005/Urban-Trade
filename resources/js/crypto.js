import axios from 'axios';

let previousPrices = {};

function fetchCryptoData() {
    axios.get('/api/crypto')
        .then(response => {
            const tableBody = document.getElementById('crypto-table-body');
            tableBody.innerHTML = '';

            response.data.forEach(coin => {
                const oldPrice = previousPrices[coin.id] || coin.current_price;
                const isPriceUp = coin.current_price > oldPrice;
                const priceColor = isPriceUp ? 'green' : (coin.current_price < oldPrice ? 'red' : 'black');

                previousPrices[coin.id] = coin.current_price;

                const row = `
                <tr>
                    <td class="d-flex align-items-center gap-2">
                        <img src="${coin.image}" alt="${coin.name}" width="32" height="32">
                        <span>${coin.name}</span>
                    </td>
                    <td style="color: ${priceColor}; font-weight: bold;">
                        Rp ${coin.current_price.toLocaleString('id-ID')}
                    </td>
                    <td style="color: ${coin.price_change_percentage_24h >= 0 ? 'green' : 'red'};">
                        ${coin.price_change_percentage_24h.toFixed(2)}%
                    </td>
                </tr>
                `;
                tableBody.innerHTML += row;
            });
        })
        .catch(error => {
            console.error('Error fetching crypto data:', error);
        });
}

function fetchMarketData() {
    axios.get('/api/market')
        .then(response => {
            const tableBody = document.getElementById('market-table-body');
            tableBody.innerHTML = '';

            response.data.forEach(coin => {
                const oldPrice = previousPrices[coin.id] || coin.current_price;
                const isPriceUp = coin.current_price > oldPrice;
                const priceColor = isPriceUp ? 'green' : (coin.current_price < oldPrice ? 'red' : 'black');

                previousPrices[coin.id] = coin.current_price;

                const row = `
                <tr>
                    <td class="d-flex align-items-center gap-2">
                        <img src="${coin.image}" alt="${coin.name}" width="32" height="32">
                        <span>${coin.name}</span>
                    </td>
                    <td style="color: ${priceColor}; font-weight: bold;">
                        Rp ${coin.current_price.toLocaleString('id-ID')}
                    </td>
                    <td style="color: ${coin.price_change_percentage_24h >= 0 ? 'green' : 'red'};">
                        ${coin.price_change_percentage_24h.toFixed(2)}%
                    </td>
                </tr>
                `;
                tableBody.innerHTML += row;
            });
        })
        .catch(error => {
            console.error('Error fetching crypto data:', error);
        });
}

function getBitcoinPrice() {
    axios.get('/api/bitcoin')
        .then(response => {
            document.getElementById('btc-price').innerText = `Rp ${response.data.bitcoin.idr}`;
        })
        .catch(error => {
            console.error('Gagal ambil harga BTC:', error);
        });
}

document.addEventListener('DOMContentLoaded', () => {
    fetchCryptoData();
    fetchMarketData();
    getBitcoinPrice();
    setInterval(fetchCryptoData, 20000); // Update tabel tiap 20 detik
    setInterval(getBitcoinPrice, 30000); // Update BTC price tiap 30 detik
    setInterval(fetchMarketData, 20000); // Update BTC price tiap 30 detik
});
