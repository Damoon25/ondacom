// Función para devolver una imagen personalizada para el #info-panel basada en el nodo
function getCustomIconForInfoPanel(nodeId) {
    const customIcons = {
        1: './public/img/icons/icon-mundo-B.svg',
        2: './public/img/icons/icon-antena-B.svg',
        3: './public/img/icons/icon-atomo-B.svg',
        4: './public/img/icons/icon-casa-B.svg',
        5: './public/img/icons/icon-telefono-B.svg',
        6: './public/img/icons/icon-edificio-B.svg'
    };
    
    return customIcons[nodeId] || './public/img/icons/default-icon.svg';  // Icono por defecto si no existe
}

document.addEventListener("DOMContentLoaded", function () {
    // Fetch para obtener los datos desde PHP
    fetch('diagramaData.php')
        .then(response => response.json())
        .then(data => {
            // Limpiar nodos existentes para evitar duplicación
            d3.selectAll('.node').remove();
            d3.selectAll('path').remove();
            d3.selectAll('circle').remove();  // Limpiar los puntos

            const svg = d3.select("#lines")
                .attr("width", window.innerWidth)  // Cubrir todo el ancho de la ventana
                .attr("height", window.innerHeight)  // Cubrir toda la altura
                .style("position", "absolute")
                .style("top", "0")
                .style("left", "0");

            // Renderizar nodos con textos y la clase .textNode
            data.nodes.forEach(node => {
                const container = d3.select(`#node${node.id}`);

                // Limpiar contenedor antes de renderizar
                container.html('');

                // Agregar el contenido del nodo (texto e íconos)
                const contentDiv = container.append("div")
                    .attr("class", "node")
                    .style("display", "flex")
                    .style("flex-direction", "column")
                    .style("align-items", "start")
                    .style("text-align", "start");

                // Agregar texto con la clase .textNode
                contentDiv.append("p")
                    .attr("class", "textNode")
                    .style("color", "var(--color4)")  // Asegura que el color esté definido
                    .style("margin", "0")
                    .html(`<span class="numberText">${node.id}.</span><br class="mb-2">${node.name}`);

                // Agregar ícono debajo del texto en el nodo (mantener imagen original)
                contentDiv.append("img")
                    .attr("class", "iconNode")
                    .attr("src", node.icon)
                    .attr("alt", "icon")
                    .style("width", "50px")
                    .style("height", "50px")
                    .style("margin-top", "10px");

                // Evento hover para mostrar datos y una imagen personalizada en #info-panel
                container.on("mouseenter", function () {
                    // Cambiar el contenido del #info-panel con las nuevas clases
                    d3.select("#info-panel h2.numberInfoPanel")
                        .text(`${node.id}.`);

                    d3.select("#info-panel p.subtextInfoPanel")
                        .text(`${node.name}`);

                    // Actualizar el párrafo con la clase textInfoPanel para mostrar los detalles con HTML
                    d3.select("#info-panel p.textInfoPanel")
                        .html(`${node.details}`); // Usar .html() para procesar el HTML

                    // Imagen personalizada para el #info-panel (diferente a la del nodo)
                    const infoPanelIcon = getCustomIconForInfoPanel(node.id);  // Función para obtener la imagen personalizada
                    d3.select("#info-panel img")
                        .attr("src", infoPanelIcon)
                        .style("width", "100px")  // Tamaño personalizado para el #info-panel
                        .style("height", "100px");

                    d3.select("#info-panel").classed("show-info", true);
                });

                container.on("mouseleave", function () {
                    // Limpiar el contenido del #info-panel y ocultarlo
                    d3.select("#info-panel h2.numberInfoPanel")
                        .text("Hover sobre un nodo");

                    d3.select("#info-panel p.subtextInfoPanel")
                        .text("se encuentra el nombre...");

                    // Restablecer el contenido del párrafo de detalles
                    d3.select("#info-panel p.textInfoPanel")
                        .html("se encuentran los detalles...");

                    d3.select("#info-panel img").attr("src", "");  // Ocultar el ícono
                    d3.select("#info-panel").classed("show-info", false);
                });
            });

            // Crear las líneas curvas de conexión entre los nodos
            const lineGenerator = d3.line()
                .curve(d3.curveBasis);  // Define la curva suave

            const links = svg.selectAll("path")
                .data(data.links)
                .enter()
                .append("path")
                .attr("d", d => {
                    const nodeSource = document.querySelector(`#node${d.source}`);
                    const nodeTarget = document.querySelector(`#node${d.target}`);

                    const sourceX = nodeSource.getBoundingClientRect().left + (nodeSource.offsetWidth / 2);
                    const sourceY = nodeSource.getBoundingClientRect().top + window.scrollY + (nodeSource.offsetHeight / 2);

                    const targetX = nodeTarget.getBoundingClientRect().left + (nodeTarget.offsetWidth / 2);
                    const targetY = nodeTarget.getBoundingClientRect().top + window.scrollY + (nodeTarget.offsetHeight / 2);

                    return lineGenerator([[sourceX, sourceY], [(sourceX + targetX) / 2, (sourceY + targetY) / 2], [targetX, targetY]]);
                })
                .style("fill", "none")
                .style("stroke", "#0DEAB1")  // Color de la línea
                .style("stroke-width", 3);

            // Agregar puntos al final de cada línea
            svg.selectAll("circle")
                .data(data.links)
                .enter()
                .append("circle")
                .attr("cx", d => {
                    const nodeTarget = document.querySelector(`#node${d.target}`);
                    return nodeTarget.getBoundingClientRect().left + (nodeTarget.offsetWidth / 2);
                })
                .attr("cy", d => {
                    const nodeTarget = document.querySelector(`#node${d.target}`);
                    return nodeTarget.getBoundingClientRect().top + window.scrollY + (nodeTarget.offsetHeight / 2);
                })
                .attr("r", 5)  // Radio del punto
                .style("fill", "#0DEAB1");  // Color del punto

            // Función para actualizar las posiciones de las líneas y los puntos
            function updateLines() {
                links.attr("d", d => {
                    const nodeSource = document.querySelector(`#node${d.source}`);
                    const nodeTarget = document.querySelector(`#node${d.target}`);

                    const sourceX = nodeSource.getBoundingClientRect().left + (nodeSource.offsetWidth / 2);
                    const sourceY = nodeSource.getBoundingClientRect().top + window.scrollY + (nodeSource.offsetHeight / 2);

                    const targetX = nodeTarget.getBoundingClientRect().left + (nodeTarget.offsetWidth / 2);
                    const targetY = nodeTarget.getBoundingClientRect().top + window.scrollY + (nodeTarget.offsetHeight / 2);

                    return lineGenerator([[sourceX, sourceY], [(sourceX + targetX) / 2, (sourceY + targetY) / 2], [targetX, targetY]]);
                });

                svg.selectAll("circle")
                    .attr("cx", d => {
                        const nodeTarget = document.querySelector(`#node${d.target}`);
                        return nodeTarget.getBoundingClientRect().left + (nodeTarget.offsetWidth / 2);
                    })
                    .attr("cy", d => {
                        const nodeTarget = document.querySelector(`#node${d.target}`);
                        return nodeTarget.getBoundingClientRect().top + window.scrollY + (nodeTarget.offsetHeight / 2);
                    });
            }

            // Llamar a la función para actualizar las líneas y los puntos
            updateLines();

            // Actualizar las líneas y puntos cuando la ventana se redimensiona
            window.addEventListener("resize", function () {
                svg.attr("width", window.innerWidth).attr("height", window.innerHeight);
                updateLines();
            });

            // Actualizar las líneas y puntos cuando la página se desplaza
            window.addEventListener("scroll", updateLines);
        })
        .catch(error => console.error('Error al cargar los datos:', error));
});
