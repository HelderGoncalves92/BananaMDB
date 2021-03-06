var PMA_messages = new Array();
PMA_messages['strNoDropDatabases'] = "Os comandos \"DROP DATABASE\" estão inibidos.";
PMA_messages['strDoYouReally'] = "Você realmente deseja executar \"%s\"?";
PMA_messages['strDropDatabaseStrongWarning'] = "Estará prestes a DESTRUIR uma base de dados completa!";
PMA_messages['strDropTableStrongWarning'] = "Está prestes a DESTRUIR uma base de dados completa!";
PMA_messages['strTruncateTableStrongWarning'] = "Está prestes a TRUNCAR uma base de dados completa!";
PMA_messages['strDeleteTrackingData'] = "Apagar dados de tracking para esta tabela";
PMA_messages['strDeletingTrackingData'] = "Apagando dados de tracking";
PMA_messages['strDroppingPrimaryKeyIndex'] = "Apagando Chave Primária/Indice";
PMA_messages['strOperationTakesLongTime'] = "Esta operação poderá demorar. Deseja prosseguir?";
PMA_messages['strFormEmpty'] = "Nº de dados insuficiente!";
PMA_messages['strNotNumber'] = "Isto não é um número!";
PMA_messages['strAddIndex'] = "Adicionar Índice";
PMA_messages['strEditIndex'] = "Editar Índice";
PMA_messages['strAddToIndex'] = "Adiciona %s coluna(s) ao Índice";
PMA_messages['strYValues'] = "Valores para Y";
PMA_messages['strHostEmpty'] = "O nome da máquina está vazio!";
PMA_messages['strUserEmpty'] = "O nome do utilizador está vazio!";
PMA_messages['strPasswordEmpty'] = "Indique a palavras-passe!";
PMA_messages['strPasswordNotSame'] = "As palavras-passe são diferentes!";
PMA_messages['strAddUser'] = "Adicionar utilizador";
PMA_messages['strReloadingPrivileges'] = "Recarregar Privilégios";
PMA_messages['strRemovingSelectedUsers'] = "Removendo os utilizadores seleccionados";
PMA_messages['strClose'] = "Fechar";
PMA_messages['strEdit'] = "Edita";
PMA_messages['strLiveTrafficChart'] = "Gráfico de tráfego em direto";
PMA_messages['strLiveConnChart'] = "Gráfico de ligações/processo ao vivo";
PMA_messages['strLiveQueryChart'] = "Gráfico de comandos em directo";
PMA_messages['strStaticData'] = "Dados estáticos";
PMA_messages['strTotal'] = "Total:";
PMA_messages['strOther'] = "Outros";
PMA_messages['strThousandsSeparator'] = ",";
PMA_messages['strDecimalSeparator'] = ".";
PMA_messages['strChartConnectionsTitle'] = "Ligações / Processos";
PMA_messages['strIncompatibleMonitorConfig'] = "Configuração incompatível do monitor local";
PMA_messages['strIncompatibleMonitorConfigDescription'] = "As configurações da tabela de armazenamento local do seu browser já não são compatíveis com a nova versão do monitor de diálogos. É provável que a sua configuração actual deixe de funcionar. Por favor, reinicie as suas configurações no menu <i>Configurações</i>.";
PMA_messages['strQueryCacheEfficiency'] = "Eficiência da cache de comandos";
PMA_messages['strQueryCacheUsage'] = "Utilização da cache de comandos";
PMA_messages['strQueryCacheUsed'] = "Cache de comandos utilizada";
PMA_messages['strSystemCPUUsage'] = "Uso do CPU do Sistema";
PMA_messages['strSystemMemory'] = "Memória do sistema";
PMA_messages['strSystemSwap'] = "Swap do sistema";
PMA_messages['strAverageLoad'] = "Carga média";
PMA_messages['strTotalMemory'] = "Memória total";
PMA_messages['strCachedMemory'] = "Memória na cache";
PMA_messages['strBufferedMemory'] = "Memória retida";
PMA_messages['strFreeMemory'] = "Memória livre";
PMA_messages['strUsedMemory'] = "Memória utilizada";
PMA_messages['strTotalSwap'] = "Swap total";
PMA_messages['strCachedSwap'] = "Swap retida";
PMA_messages['strUsedSwap'] = "Swap utilizada";
PMA_messages['strFreeSwap'] = "Swap livre";
PMA_messages['strBytesSent'] = "Bytes enviados";
PMA_messages['strBytesReceived'] = "Bytes recebidos";
PMA_messages['strConnections'] = "Ligações";
PMA_messages['strProcesses'] = "Processos";
PMA_messages['strB'] = "Bytes";
PMA_messages['strKiB'] = "KB";
PMA_messages['strMiB'] = "MB";
PMA_messages['strGiB'] = "GB";
PMA_messages['strTiB'] = "TB";
PMA_messages['strPiB'] = "PB";
PMA_messages['strEiB'] = "EB";
PMA_messages['strTables'] = "%d tabela(s)";
PMA_messages['strQuestions'] = "Perguntas";
PMA_messages['strTraffic'] = "Tráfego";
PMA_messages['strSettings'] = "Configurações";
PMA_messages['strRemoveChart'] = "Remover gráfico";
PMA_messages['strEditChart'] = "Editar titulo e rótulos";
PMA_messages['strAddChart'] = "Adicionar gráfico a grelha";
PMA_messages['strAddOneSeriesWarning'] = "Por favor adicione pelo menos uma variável à serie";
PMA_messages['strNone'] = "Nenhum";
PMA_messages['strResumeMonitor'] = "Resumir o monitor";
PMA_messages['strPauseMonitor'] = "Pausar o monitor";
PMA_messages['strBothLogOn'] = "general_log e slow_query estão ativos.";
PMA_messages['strGenLogOn'] = "general_log está ativo.";
PMA_messages['strSlowLogOn'] = "slow_query_log está ativo.";
PMA_messages['strBothLogOff'] = "slow_query_log e general_log estão desativados.";
PMA_messages['strLogOutNotTable'] = "log_output não está configurado para TABELA.";
PMA_messages['strLogOutIsTable'] = "\"log_output\" está definido para a TABELA.";
PMA_messages['strSmallerLongQueryTimeAdvice'] = "slow_query_log está ativo, mas o servidor só regista comandos que demorem mais de %d segundos. É recomendado definir long_query_time para 0-2 segundos, dependendo do seu sistema.";
PMA_messages['strLongQueryTimeSet'] = "long_query_time está configurado para %d segundo(s).";
PMA_messages['strSettingsAppliedGlobal'] = "As seguintes configurações vão ser aplicadas globalmente e redefinidas para o valor padrão após o reinicio do servidor:";
PMA_messages['strSetLogOutput'] = "Define log_output como %s";
PMA_messages['strEnableVar'] = "Ativar %s";
PMA_messages['strDisableVar'] = "Desactivar %s";
PMA_messages['setSetLongQueryTime'] = "Definir \"long_query_time\" para %ds";
PMA_messages['strNoSuperUser'] = "Não pode modificar estas variáveis. Por favor faça login como root ou contacte o seu administrador de base de dados.";
PMA_messages['strChangeSettings'] = "Modificar configurações";
PMA_messages['strCurrentSettings'] = "Configurações atuais";
PMA_messages['strChartTitle'] = "Titulo do gráfico";
PMA_messages['strDifferential'] = "Diferencial";
PMA_messages['strDividedBy'] = "Dividido por %s";
PMA_messages['strUnit'] = "Unidade";
PMA_messages['strFromSlowLog'] = "Do registo lento";
PMA_messages['strFromGeneralLog'] = "Do registo geral";
PMA_messages['strAnalysingLogsTitle'] = "A analisar os registos";
PMA_messages['strAnalysingLogs'] = "A analisar e a carregar registos. Isto pode demorar um um pouco.";
PMA_messages['strCancelRequest'] = "Cancelar pedido";
PMA_messages['strCountColumnExplanation'] = "Esta coluna mostra a quantidade de consultas idênticas que são agrupadas juntas. No entanto, apenas a consulta SQL em si foi usada como um critério de agrupamento, por isso os outros atributos de consultas, tais como horário de início, podem ser diferentes.";
PMA_messages['strMoreCountColumnExplanation'] = "Uma vez que o agrupamento de consultas INSERT foi selecionado, consultas INSERT na mesma tabela também são agrupadas juntas, independentemente dos dados inseridos.";
PMA_messages['strLogDataLoaded'] = "Dados do registo carregados. Comandos executados neste período de tempo:";
PMA_messages['strJumpToTable'] = "Saltar para a tabela de registos";
PMA_messages['strNoDataFoundTitle'] = "Dados não encontrados.";
PMA_messages['strNoDataFound'] = "Registo analisado, mas não foram encontrados dados neste período de tempo.";
PMA_messages['strAnalyzing'] = "Em análise…";
PMA_messages['strExplainOutput'] = "Explicar SQL";
PMA_messages['strStatus'] = "Estado";
PMA_messages['strTime'] = "Tempo";
PMA_messages['strTotalTime'] = "Tempo Total:";
PMA_messages['strProfilingResults'] = "Resultado(s) da(s) consulta(s)";
PMA_messages['strTable'] = "Tabela";
PMA_messages['strChart'] = "Mapa de Resultados";
PMA_messages['strChartEdit'] = "Editar gráfico";
PMA_messages['strSeries'] = "Grupos";
PMA_messages['strFiltersForLogTable'] = "Opções de filtragem da tabela de registos";
PMA_messages['strFilter'] = "Filtrar";
PMA_messages['strFilterByWordRegexp'] = "Filtrar comandos por palavra/regexp:";
PMA_messages['strIgnoreWhereAndGroup'] = "Agrupar comandos, ignorando dados variáveis em clausulas WHERE";
PMA_messages['strSumRows'] = "Soma de linhas agrupadas:";
PMA_messages['strLoadingLogs'] = "Carregando registos";
PMA_messages['strRefreshFailed'] = "Falhou a atualização do monitor";
PMA_messages['strInvalidResponseExplanation'] = "Ao pedir novos dados do gráfico o servidor retornou uma resposta inválida. Isto é provavelmente porque a sua sessão expirou. Atualizar a página e reinserir as suas credenciais deve ajudar.";
PMA_messages['strReloadPage'] = "Atualizar página";
PMA_messages['strAffectedRows'] = "Linhas afetadas:";
PMA_messages['strFailedParsingConfig'] = "Falha ao processar ficheiro de configuração. Não parece ser código JSON válido.";
PMA_messages['strFailedBuildingGrid'] = "Falha ao construir grelha do gráfico com a configuração importada. Redefinindo os valores padrão…";
PMA_messages['strImport'] = "Importar";
PMA_messages['strImportDialogTitle'] = "Importar configuração do monitor";
PMA_messages['strImportDialogMessage'] = "Por favor, selecione o ficheiro que deseja importar";
PMA_messages['strAnalyzeQuery'] = "Analisar Comando";
PMA_messages['strAdvisorSystem'] = "Sistema de Assessoria";
PMA_messages['strPerformanceIssues'] = "Possíveis problemas de desempenho";
PMA_messages['strIssuse'] = "Problemas";
PMA_messages['strRecommendation'] = "Recomendação";
PMA_messages['strRuleDetails'] = "Detalhes da regra";
PMA_messages['strJustification'] = "Justificação";
PMA_messages['strFormula'] = "Variável / formula utilizada";
PMA_messages['strTest'] = "Teste";
PMA_messages['strGo'] = "Executar";
PMA_messages['strCancel'] = "Cancelar";
PMA_messages['strLoading'] = "Carregando";
PMA_messages['strProcessingRequest'] = "Processando Pedido";
PMA_messages['strErrorProcessingRequest'] = "Erro a Processar Pedido";
PMA_messages['strErrorCode'] = "Código de erro: %s";
PMA_messages['strErrorText'] = "Texto do erro: %s";
PMA_messages['strNoDatabasesSelected'] = "Nenhuma base de dados selecionada.";
PMA_messages['strDroppingColumn'] = "Apagando Coluna";
PMA_messages['strAddingPrimaryKey'] = "Adicionando Chave Primária";
PMA_messages['strOK'] = "OK";
PMA_messages['strDismiss'] = "Clique para fechar esta notificação";
PMA_messages['strRenamingDatabases'] = "Renomeando Bases de Dados";
PMA_messages['strReloadDatabase'] = "Recarregar Base de Dados";
PMA_messages['strCopyingDatabase'] = "Copiando Bases de Dados";
PMA_messages['strChangingCharset'] = "Mudando Mapa de Caracteres";
PMA_messages['strTableMustHaveAtleastOneColumn'] = "A tabela terá que ter pelo menos uma coluna";
PMA_messages['strYes'] = "Sim";
PMA_messages['strNo'] = "Não";
PMA_messages['strInsertTable'] = "Inserir Tabela";
PMA_messages['strHideIndexes'] = "Esconder índices";
PMA_messages['strShowIndexes'] = "Mostrar índices";
PMA_messages['strForeignKeyCheck'] = "Verificação de chave estrangeira:";
PMA_messages['strForeignKeyCheckEnabled'] = "(Ativado)";
PMA_messages['strForeignKeyCheckDisabled'] = "(Desativado)";
PMA_messages['strSearching'] = "Pesquisando";
PMA_messages['strHideSearchResults'] = "Esconder resultados da pesquisa";
PMA_messages['strShowSearchResults'] = "Mostrar resultados da pesquisa";
PMA_messages['strBrowsing'] = "Navegação";
PMA_messages['strDeleting'] = "A Eliminar";
PMA_messages['MissingReturn'] = "A definição de uma função armazenada deve conter uma instrução RETURN!";
PMA_messages['enum_editor'] = "Editor ENUM/SET";
PMA_messages['enum_columnVals'] = "Valores para a coluna \"%s\"";
PMA_messages['enum_newColumnVals'] = "Valores para a nova coluna";
PMA_messages['enum_hint'] = "Introduza cada valor num campo separado";
PMA_messages['enum_addValue'] = "Add %d valor(es)";
PMA_messages['strImportCSV'] = "Nota: Se o arquivo contém várias tabelas, estas serão combinadas numa";
PMA_messages['strHideQueryBox'] = "Esconder Caixa do query";
PMA_messages['strShowQueryBox'] = "Mostrar Caixa do query";
PMA_messages['strNoRowSelected'] = "Nenhum registo(linha) seleccionado";
PMA_messages['strChangeTbl'] = "Muda";
PMA_messages['strQueryExecutionTime'] = "Tempo de execução da consulta";
PMA_messages['strNotValidRowNumber'] = "%d não é um número de linha válido.";
PMA_messages['strSave'] = "Guarda";
PMA_messages['strHideSearchCriteria'] = "Esconder critérios de buca";
PMA_messages['strShowSearchCriteria'] = "Mostrar critérios de busca";
PMA_messages['strZoomSearch'] = "Pesquisa Avançada";
PMA_messages['strDisplayHelp'] = "<ul><li>Cada ponto representa um registo (linha) de dados.</li><li>Colocar o cursor por cima de um ponto irá mostrar a sua legenda.</li><li>Para ampliar, selecione uma area do gráfico com o rato.</li><li>Clique no botão Reset Zoom para voltar ao estado original.</li><li>Clique num ponto de dados para ver e possivelmente editar a linha de dados.</li><li>O plano pode ser redimensionado arrastando-o ao longo do canto inferior direito.</li></ul>";
PMA_messages['strInputNull'] = "<strong>Seleccione duas colunas</strong>";
PMA_messages['strSameInputs'] = "<strong>Seleccione duas colunas diferentes</strong>";
PMA_messages['strQueryResults'] = "Resultado(s) das(s) consulta(s)";
PMA_messages['strDataPointContent'] = "Conteúdo do ponto de dados";
PMA_messages['strIgnore'] = "Ignora";
PMA_messages['strCopy'] = "Copiar";
PMA_messages['strX'] = "X";
PMA_messages['strY'] = "Y";
PMA_messages['strPoint'] = "Ponto";
PMA_messages['strPointN'] = "Ponto %d";
PMA_messages['strLineString'] = "Segmento de Reta";
PMA_messages['strPolygon'] = "Polígono";
PMA_messages['strGeometry'] = "Geometria";
PMA_messages['strInnerRing'] = "Anel Interior";
PMA_messages['strOuterRing'] = "Anel Exterior";
PMA_messages['strAddPoint'] = "Adicionar um ponto";
PMA_messages['strAddInnerRing'] = "Adicionar um anel interior";
PMA_messages['strAddPolygon'] = "Adicionar um polígono";
PMA_messages['strAddColumns'] = "Adicionar colunas";
PMA_messages['strSelectReferencedKey'] = "Seleccione chave de referencia";
PMA_messages['strSelectForeignKey'] = "Seleccione Foreign Key";
PMA_messages['strPleaseSelectPrimaryOrUniqueKey'] = "Por favor seleccione a chave primária ou a chave única";
PMA_messages['strChangeDisplay'] = "Escolha a coluna para mostrar";
PMA_messages['strLeavingDesigner'] = "Não salvou as mudanças no layout. Estas serão perdidas se não as guardar. Deseja continuar?";
PMA_messages['strAddOption'] = "Adicionar uma opção para a coluna ";
PMA_messages['strObjectsCreated'] = "%d objecto(s) criado(s)";
PMA_messages['strCellEditHint'] = "Carregue em ESC para cancelar a edição";
PMA_messages['strSaveCellWarning'] = "Editou alguns dados e estes não foram salvos. Tem certeza que quer sair desta página antes de salvar os seus dados?";
PMA_messages['strColOrderHint'] = "Arraste para re-ordenar";
PMA_messages['strSortHint'] = "Clique para organizar";
PMA_messages['strColMarkHint'] = "Clique para marcar/desmarcar";
PMA_messages['strColNameCopyHint'] = "Duplo-clique para copiar o nome da coluna";
PMA_messages['strColVisibHint'] = "Clique na seta<br />para alternar a visibilidade da coluna";
PMA_messages['strShowAllCol'] = "Mostrar tudo";
PMA_messages['strAlertNonUnique'] = "Esta tabela não contém uma coluna exclusiva. Funções relacionados com a edição da tabela, checkbox, Editar, Copiar e Eliminar links podem não funcionar depois de guardar.";
PMA_messages['strGridEditFeatureHint'] = "Também pode editar a maioria dos valores<br />com um duplo clique no valor a alterar.";
PMA_messages['strGoToLink'] = "Ir para a hiperligação";
PMA_messages['strColNameCopyTitle'] = "Copiar nome da coluna";
PMA_messages['strColNameCopyText'] = "Clique com o botão direito do rato para copiar para a área de transferência.";
PMA_messages['strShowDataRowLink'] = "Mostrar registo(s)";
PMA_messages['strGeneratePassword'] = "Gerar palavra-passe";
PMA_messages['strGenerate'] = "Gerar";
PMA_messages['strChangePassword'] = "Alterar a palavra-passe";
PMA_messages['strMore'] = "Mais";
PMA_messages['strShowPanel'] = "Ver Painel";
PMA_messages['strHidePanel'] = "Esconder Painel";
PMA_messages['strInvalidPage'] = "A página requisitada não foi encontrada no histórico, pode ter expirado.";
PMA_messages['strNewerVersion'] = "Uma nova versão do phpMyAdmin está disponível e deverá proceder à actualização. A nova versão é %s, e foi lançada em %s.";
PMA_messages['strLatestAvailable'] = ", última versão estável:";
PMA_messages['strUpToDate'] = "até à data";
var themeCalendarImage = './themes/pmahomme/img/b_calendar.png';
var pmaThemeImage = './themes/pmahomme/img/';
var pmaversion = '4.0.4.1';
if ($.datepicker) {
$.datepicker.regional['']['closeText'] = "Concluído";
$.datepicker.regional['']['prevText'] = "Ant";
$.datepicker.regional['']['nextText'] = "Próx";
$.datepicker.regional['']['currentText'] = "Hoje";
$.datepicker.regional['']['monthNames'] = ["Janeiro","Fevereiro","Março","Abril","Mai","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro",];
$.datepicker.regional['']['monthNamesShort'] = ["Jan","Fev","Mar","Abr","Maio","Jun","Jul","Ago","Set","Out","Nov","Dez",];
$.datepicker.regional['']['dayNames'] = ["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sábado",];
$.datepicker.regional['']['dayNamesShort'] = ["Domingo","Seg","Ter","Qua","Qui","Sex","Sab",];
$.datepicker.regional['']['dayNamesMin'] = ["Dom","Seg","Ter","Qua","Qui","Sex","Sáb",];
$.datepicker.regional['']['weekHeader'] = "Sem";
$.datepicker.regional['']['showMonthAfterYear'] = false;
$.datepicker.regional['']['yearSuffix'] = "Nenhum";
$.extend($.datepicker._defaults, $.datepicker.regional['']);
} /* if ($.datepicker) */

if ($.timepicker) {
$.timepicker.regional['']['timeText'] = "Tempo";
$.timepicker.regional['']['hourText'] = "Hora";
$.timepicker.regional['']['minuteText'] = "Minuto";
$.timepicker.regional['']['secondText'] = "Segundo";
$.extend($.timepicker._defaults, $.timepicker.regional['']);
} /* if ($.timepicker) */
