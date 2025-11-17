<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>988 Карго - 中俄货物运输一站式解决方案</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">   
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FFFFFF;
        }
        .card {
            background-color: white;
            border: 1px solid #E5E7EB;
            border-radius: 1.25rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            overflow: hidden;
            position: relative;
        }
        .highlight-gradient-blue {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0), rgba(59, 130, 246, 0.05));
        }
        .highlight-gradient-green {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0), rgba(34, 197, 94, 0.05));
        }
        .highlight-gradient-amber {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0), rgba(245, 158, 11, 0.05));
        }
        .highlight-gradient-rose {
            background: linear-gradient(135deg, rgba(244, 63, 94, 0), rgba(244, 63, 94, 0.05));
        }
        .highlight-gradient-purple {
            background: linear-gradient(135deg, rgba(168, 85, 247, 0), rgba(168, 85, 247, 0.05));
        }
        .highlight-gradient-cyan {
            background: linear-gradient(135deg, rgba(6, 182, 212, 0), rgba(6, 182, 212, 0.05));
        }
        .highlight-gradient-indigo {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0), rgba(99, 102, 241, 0.05));
        }
        /* 产品卡片渐变区分 */
        .product-gradient-tir {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0), rgba(59, 130, 246, 0.08));
        }
        .product-gradient-fast {
            background: linear-gradient(135deg, rgba(34, 197, 94, 0), rgba(34, 197, 94, 0.08));
        }
        .product-gradient-value {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0), rgba(245, 158, 11, 0.08));
        }
        .product-gradient-belt {
            background: linear-gradient(135deg, rgba(168, 85, 247, 0), rgba(168, 85, 247, 0.08));
        }
    </style>
</head>
<body class="bg-white">
    <div class="max-w-7xl mx-auto p-4 md:p-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 md:gap-6">
            <!-- 主标题卡片 -->
            <div class="card md:col-span-4 p-8 flex flex-col justify-center">
                <div class="absolute top-0 left-0 w-full h-full highlight-gradient-blue"></div>
                <div class="relative">
                    <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-4">
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-800">988 Карго</h1>
                        <span class="text-gray-500 font-medium mt-2 md:mt-0">中俄货物运输一站式解决方案</span>
                    </div>
                    <p class="text-xl text-gray-600">专业、高效、灵活的中国至俄罗斯物流服务，满足不同业务需求</p>
                    <p class="text-lg text-blue-600 mt-2">Добро пожаловать в 988 Карго — ваш надежный партнер в логистике между Китаем и Россией</p>
                </div>
            </div>

            <!-- 品牌介绍卡片 -->
            <div class="card md:col-span-4 p-8">
                <div class="absolute top-0 left-0 w-full h-full highlight-gradient-cyan"></div>
                <div class="relative text-center">
                    <i class="fa-solid fa-truck-ramp-box text-cyan-500 text-4xl mb-4"></i>
                    <h2 class="text-2xl font-bold text-cyan-700 mb-3">关于我们</h2>
                    <p class="text-gray-600 max-w-3xl mx-auto">
                        988 Карго专注于中国至俄罗斯货物运输，整合TIR卡航、白关陆运、一带一路铁路专线等优质资源，提供从仓储、运输、清关到配送的全链路服务，为不同货量、不同时效需求的客户定制专属解决方案。
                    </p>
                    <p class="text-gray-500 mt-2">
                        988 Карго специализируется на перевозке грузов из Китая в Россию, предлагая комплексные решения от хранения до доставки через ТИР-автоперевозки, сухопутные перевозки и железнодорожные линии "Один пояс, один путь".
                    </p>
                </div>
            </div>

            <!-- 核心产品展示 - TIR卡航直达 -->
            <div class="card md:col-span-1 sm:col-span-2 lg:col-span-1 p-6 flex flex-col product-gradient-tir">
                <div class="relative">
                    <div class="w-14 h-14 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-truck-fast text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">TIR卡航直达</h3>
                    <p class="text-blue-700 font-semibold mb-1">Прямая ТИР-автоперевозка</p> <!-- 修正俄语翻译 -->
                    <div class="space-y-3 mt-4">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clock text-blue-500 w-6"></i>
                            <span class="text-gray-700">时效：15-18天</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-boxes-stacked text-blue-500 w-6"></i>
                            <span class="text-gray-700">起收：单品10方起</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-star text-blue-500 w-6"></i>
                            <span class="text-gray-700">优势：快速直达，通关无忧</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 核心产品展示 - 白关陆运快速时效版 -->
            <div class="card md:col-span-1 sm:col-span-2 lg:col-span-1 p-6 flex flex-col product-gradient-fast">
                <div class="relative">
                    <div class="w-14 h-14 bg-green-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-gauge-high text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">白关陆运快速时效版</h3>
                    <p class="text-green-700 font-semibold mb-1">Быстрая сухопутная доставка</p>
                    <div class="space-y-3 mt-4">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clock text-green-500 w-6"></i>
                            <span class="text-gray-700">时效：18-20天</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-weight-hanging text-green-500 w-6"></i>
                            <span class="text-gray-700">起收：5方或1吨起</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-star text-green-500 w-6"></i>
                            <span class="text-gray-700">优势：兼顾成本与时效</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 核心产品展示 - 白关陆运高性价比版 -->
            <div class="card md:col-span-1 sm:col-span-2 lg:col-span-1 p-6 flex flex-col product-gradient-value">
                <div class="relative">
                    <div class="w-14 h-14 bg-amber-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-hand-holding-dollar text-amber-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">白关陆运高性价比版</h3>
                    <p class="text-amber-700 font-semibold mb-1">Экономичная сухопутная доставка</p>
                    <div class="space-y-3 mt-4">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clock text-amber-500 w-6"></i>
                            <span class="text-gray-700">时效：25-35天</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-weight-hanging text-amber-500 w-6"></i>
                            <span class="text-gray-700">起收：500公斤起</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-star text-amber-500 w-6"></i>
                            <span class="text-gray-700">优势：成本更具优势</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 核心产品展示 - 一带一路专线运输（修正为铁路） -->
            <div class="card md:col-span-1 sm:col-span-2 lg:col-span-1 p-6 flex flex-col product-gradient-belt">
                <div class="relative">
                    <div class="w-14 h-14 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                        <i class="fa-solid fa-train text-purple-600 text-2xl"></i> <!-- 替换为铁路图标 -->
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">一带一路铁路专线</h3> <!-- 明确运输方式 -->
                    <p class="text-purple-700 font-semibold mb-1">Железнодорожная линия "Один пояс, один путь"</p> <!-- 修正俄语翻译 -->
                    <div class="space-y-3 mt-4">
                        <div class="flex items-center">
                            <i class="fa-solid fa-clock text-purple-500 w-6"></i>
                            <span class="text-gray-700">时效：35-45天</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-cubes text-purple-500 w-6"></i>
                            <span class="text-gray-700">起收：1吨起售（可拼柜/整柜）</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fa-solid fa-star text-purple-500 w-6"></i>
                            <span class="text-gray-700">优势：线路稳定，规模化操作</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 时效对比图表 -->
            <div class="card md:col-span-2 p-8 flex flex-col">
                <div class="absolute top-0 left-0 w-full h-full highlight-gradient-rose"></div>
                <div class="relative flex-shrink-0">
                    <h2 class="text-2xl font-bold text-rose-600 mb-4">
                        <i class="fa-solid fa-stopwatch mr-2"></i>各方案时效对比
                    </h2>
                </div>
                <div class="relative flex-grow min-h-[250px] mt-4">
                    <canvas id="timeCompareChart"></canvas>
                </div>
            </div>

            <!-- 起收标准对比图表 -->
            <div class="card md:col-span-2 p-8 flex flex-col">
                <div class="absolute top-0 left-0 w-full h-full highlight-gradient-indigo"></div>
                <div class="relative flex-shrink-0">
                    <h2 class="text-2xl font-bold text-indigo-600 mb-4">
                        <i class="fa-solid fa-scale-balanced mr-2"></i>各方案起收标准对比（统一换算为公斤）
                    </h2>
                    <p class="text-sm text-gray-500">注：行业通用换算标准：1方=167公斤，仅作对比参考</p>
                </div>
                <div class="relative flex-grow min-h-[250px] mt-4">
                    <canvas id="minimumWeightChart"></canvas>
                </div>
            </div>

            <!-- 关键优势卡片 -->
            <div class="card md:col-span-4 p-8">
                <div class="absolute top-0 left-0 w-full h-full highlight-gradient-green"></div>
                <div class="relative">
                    <h2 class="text-2xl font-bold text-green-600 mb-6">
                        <i class="fa-solid fa-star mr-2"></i>988 Карго核心优势
                    </h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-white bg-opacity-60 p-6 rounded-lg border border-green-100 text-center hover:shadow-md transition-shadow">
                            <i class="fa-solid fa-shield-halved text-green-500 text-3xl mb-3"></i>
                            <h3 class="font-semibold text-gray-800 text-lg mb-2">专业清关</h3>
                            <p class="text-gray-600 text-sm">熟悉中俄海关政策，通关高效无忧</p>
                        </div>
                        <div class="bg-white bg-opacity-60 p-6 rounded-lg border border-green-100 text-center hover:shadow-md transition-shadow">
                            <i class="fa-solid fa-route text-green-500 text-3xl mb-3"></i>
                            <h3 class="font-semibold text-gray-800 text-lg mb-2">线路稳定</h3>
                            <p class="text-gray-600 text-sm">多年运营经验，运力资源充足</p>
                        </div>
                        <div class="bg-white bg-opacity-60 p-6 rounded-lg border border-green-100 text-center hover:shadow-md transition-shadow">
                            <i class="fa-solid fa-layer-group text-green-500 text-3xl mb-3"></i>
                            <h3 class="font-semibold text-gray-800 text-lg mb-2">灵活适配</h3>
                            <p class="text-gray-600 text-sm">多方案可选，满足不同货量时效需求</p>
                        </div>
                        <div class="bg-white bg-opacity-60 p-6 rounded-lg border border-green-100 text-center hover:shadow-md transition-shadow">
                            <i class="fa-solid fa-headset text-green-500 text-3xl mb-3"></i>
                            <h3 class="font-semibold text-gray-800 text-lg mb-2">全程服务</h3>
                            <p class="text-gray-600 text-sm">24小时客服对接，物流状态实时追踪</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 行动号召卡片 -->
            <div class="card md:col-span-4 p-8 bg-amber-50 border-amber-100">
                <div class="relative text-center">
                    <h2 class="text-2xl font-bold text-amber-700 mb-4">欢迎选择我们，988 Карго为您服务！</h2>
                    <p class="text-gray-700 mb-6">Для консультации и заказа услуг свяжитесь с нами:</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-6">
                        <a href="tel:+8615157938188" class="flex items-center justify-center bg-amber-500 hover:bg-amber-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            <i class="fa-solid fa-phone mr-2"></i> 联系电话：+86 151 5793 8188
                        </a>
                        <a href="https://wa.me/8615157938188" target="_blank" class="flex items-center justify-center bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            <i class="fa-brands fa-whatsapp mr-2"></i> WhatsApp：+86 151 5793 8188
                        </a>
                        <a href="mailto:renlinguang988@gmail.com" class="flex items-center justify-center bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-full transition-colors">
                            <i class="fa-solid fa-envelope mr-2"></i> 邮箱：renlinguang988@gmail.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    // 图表初始化通用函数
    function initChart(ctx, config) {
        return new Chart(ctx, {
            ...config,
            options: {
                ...config.options,
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    ...config.options.plugins,
                    tooltip: {
                        backgroundColor: 'rgba(255, 255, 255, 0.9)',
                        titleColor: '#374151',
                        bodyColor: '#4b5563',
                        borderColor: '#e5e7eb',
                        borderWidth: 1,
                        padding: 12,
                        boxPadding: 6,
                        usePointStyle: true
                    }
                }
            }
        });
    }

    // 时效对比图表
    const timeCtx = document.getElementById('timeCompareChart').getContext('2d');
    initChart(timeCtx, {
        type: 'bar',
        data: {
            labels: ['TIR卡航直达', '白关陆运快速版', '白关陆运高性价比版', '一带一路铁路专线'], // 修正标签
            datasets: [
                {
                    label: '最短时效（天）',
                    data: [15, 18, 25, 35],
                    backgroundColor: 'rgba(34, 197, 94, 0.6)',
                    borderColor: 'rgba(34, 197, 94, 1)',
                    borderWidth: 1,
                    borderRadius: 4
                },
                {
                    label: '最长时效（天）',
                    data: [18, 20, 35, 45],
                    backgroundColor: 'rgba(59, 130, 246, 0.6)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1,
                    borderRadius: 4
                }
            ]
        },
        options: {
            plugins: {
                legend: { position: 'top' },
                title: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: '时效（天）' },
                    grid: { color: 'rgba(0,0,0,0.05)' }
                },
                x: { grid: { display: false } }
            }
        }
    });

    // 起收标准对比图表（统一换算为公斤）
    const weightCtx = document.getElementById('minimumWeightChart').getContext('2d');
    // 换算逻辑：1方=167公斤，各方案起收换算后的值
    const weightData = [
        10 * 167, // TIR卡航：10方 = 1670公斤
        Math.max(5 * 167, 1000), // 白关快速版：5方=835公斤 vs 1吨=1000公斤，取最大值
        500, // 白关高性价比版：500公斤
        1000 // 一带一路：1吨=1000公斤
    ];
    initChart(weightCtx, {
        type: 'bar',
        data: {
            labels: ['TIR卡航直达', '白关陆运快速版', '白关陆运高性价比版', '一带一路铁路专线'], // 修正标签
            datasets: [{
                label: '起收重量（公斤）',
                data: weightData,
                backgroundColor: [
                    'rgba(59, 130, 246, 0.6)',
                    'rgba(34, 197, 94, 0.6)',
                    'rgba(245, 158, 11, 0.6)',
                    'rgba(168, 85, 247, 0.6)'
                ],
                borderColor: [
                    'rgba(59, 130, 246, 1)',
                    'rgba(34, 197, 94, 1)',
                    'rgba(245, 158, 11, 1)',
                    'rgba(168, 85, 247, 1)'
                ],
                borderWidth: 1,
                borderRadius: 4
            }]
        },
        options: {
            plugins: {
                legend: { display: false },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const originalLabels = [
                                '10方（约1670公斤）',
                                '5方（约835公斤）或1吨，取高值',
                                '500公斤',
                                '1吨（1000公斤）'
                            ];
                            return `起收标准：${originalLabels[context.dataIndex]}（${context.raw}公斤）`;
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    title: { display: true, text: '起收重量（公斤）' },
                    grid: { color: 'rgba(0,0,0,0.05)' }
                },
                x: { grid: { display: false } }
            }
        }
    });

    // 窗口resize图表重绘
    window.addEventListener('resize', function() {
        document.querySelectorAll('canvas').forEach(canvas => {
            const chart = Chart.getChart(canvas);
            if (chart) chart.resize();
        });
    });
</script>