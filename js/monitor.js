// Функция для проверки статуса сервера
async function checkServerStatus() {
  const serverIp = "mc.reftikrp.ru";
  const serverPort = "25565";

  try {
    const response = await fetch(`https://api.mcsrvstat.us/2/${serverIp}:${serverPort}`);
    const data = await response.json();
    return {
      online: data.online,
      players: data.players ? data.players.online : 0,
      maxPlayers: data.players ? data.players.max : 0,
      version: data.version ? data.version : "Неизвестно"
    };
  } catch (error) {
    return {
      online: false,
      players: 0,
      maxPlayers: 0,
      version: "Неизвестно"
    };
  }
}

// Функция для обновления статуса сервера на веб-странице
async function updateServerStatus() {
  const statusElement = document.getElementById("server-status");
  const playersElement = document.getElementById("players-online");
  const versionElement = document.getElementById("server-version");

  const serverStatus = await checkServerStatus();

  statusElement.textContent = serverStatus.online ? "Онлайн" : "Офлайн";
  playersElement.textContent = `${serverStatus.players}/${serverStatus.maxPlayers}`;
  versionElement.textContent = serverStatus.version;
}

// Обновляем статус сервера каждые 10 секунд
setInterval(updateServerStatus, 10000);
